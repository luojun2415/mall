<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Lib\Smarty;

/**
 * Smarty模板引擎驱动
 */
class Smarty {
	
	/**
	 * 渲染模板输出
	 * 
	 * @access public
	 * @param string $templateFile
	 *        	模板文件名
	 * @param array $var
	 *        	模板变量
	 * @return void
	 */
	public function fetch($templateFile, $var) {
		$templateFile = substr ( $templateFile, strlen ( THEME_PATH ) );
		vendor ( 'Smarty.Smarty#class' );
		$tpl = new \Smarty ();
		$tpl->caching = C ( 'TMPL_CACHE_ON' );
		$tpl->compile_dir = CACHE_PATH;
		$tpl->cache_dir = TEMP_PATH;
		
		if (C ( 'TMPL_ENGINE_CONFIG' )) {
			$config = C ( 'TMPL_ENGINE_CONFIG' );
			foreach ( $config as $key => $val ) {
				if (is_array ( $tpl->{$key} )) {
					$tmp = $tpl->{$key};					
					if (is_array ( $val )) {
						foreach ( $val as $v ) {
							array_unshift ( $tmp, $v );
						}
					} else {
						array_unshift ( $tmp, $val );
					}
					$tpl->{$key} = $tmp;
				} else {
					$tpl->{$key} = $val;
				}
			}
		}
		$tpl->assign ( $var );
		$tpl->display ( THEME_NAME . '/page/' . $templateFile );
	}
	
	// 解析模板中的布局标签
	protected function parseLayout($content) {
		// 读取模板中的布局标签
		$find = preg_match ( '/' . $this->config ['taglib_begin'] . 'layout\s(.+?)\s*?\/' . $this->config ['taglib_end'] . '/is', $content, $matches );
		if ($find) {
			// 替换Layout标签
			$content = str_replace ( $matches [0], '', $content );
			// 解析Layout标签
			$array = $this->parseXmlAttrs ( $matches [1] );
			if (! C ( 'LAYOUT_ON' ) || C ( 'LAYOUT_NAME' ) != $array ['name']) {
				// 读取布局模板
				$layoutFile = $array ['name'] . C ( 'TMPL_TEMPLATE_SUFFIX' );
				// 替换布局的主体内容
				return $layoutFile;
			}
		}
		return false;
	}
	
	/**
	 * 分析XML属性
	 * 
	 * @access private
	 * @param string $attrs
	 *        	XML属性字符串
	 * @return array
	 */
	private function parseXmlAttrs($attrs) {
		$xml = '<tpl><tag ' . $attrs . ' /></tpl>';
		$xml = simplexml_load_string ( $xml );
		if (! $xml)
			E ( L ( '_XML_TAG_ERROR_' ) );
		$xml = ( array ) ($xml->tag->attributes ());
		$array = array_change_key_case ( $xml ['@attributes'] );
		return $array;
	}
}