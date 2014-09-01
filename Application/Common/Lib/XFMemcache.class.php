<?php

namespace Lib;

/**
 *
 *
 * Memcache 封装类
 * 
 * @author Administrator
 *        
 */
class XFMemcache {
	private static $mem;
	static function connect($systemEnvironment = '', $memcacheServers = '') {
		
		if ($memcacheServers == '') {
			$memcacheServers = C ( 'memcache' );
			if (! isset ( $memcacheServers )) {
				throw new \Exception ( 'error', 'can\'t find config item :memcache' );
				return false;
			}
		}
		
		if (strtolower ( PHP_OS ) == 'linux') {
			self::$mem = new \Memcached ();
			if (isset ( $memcacheServers )) {
				foreach ( $memcacheServers as $server ) {
					list ( $h, $p ) = explode ( ':', $server );
					self::$mem->addServer ( $h, $p );
				}
			}
		} else {
			self::$mem = new \Memcache ();
			if (isset ( $memcacheServers )) {
				foreach ( $memcacheServers as $server ) {
					list ( $h, $p ) = explode ( ':', $server );
					self::$mem->connect ( $h, $p );
				}
			}
		}
	}
	
	static function getMemValue($key) {
		if (self::$mem == null) {
			self::connect ();
		}

		$v = self::$mem->get ( $key );
		if ($v) {
			preg_match ( '/^\x{0006}?(.*)$/', $v, $matches );
			if ($matches [1] !== "") {
				return $matches [1];
			}
		}
		return false;
	}
	function clearMemValue($key) {
		if (self::$mem == null) {
			self::connect ();
		}
		$v = self::$mem->delete ( $key );
		return $v;
	}
	function setMemValue($key, $value, $flag = FALSE, $expire = 7200) {
		if (self::$mem == null) {
			self::connect ();
		}
		if (self::$mem instanceof \Memcache) {
			$v = self::$mem->set ( $key, $value, $flag, $expire );
		} else {
			$v = self::$mem->set ( $key, $value, $expire );
		}
		
		if ($v) {
			preg_match ( '/^\x{0006}?(.*)$/', $v, $matches );
			if ($matches [1] !== "") {
				return $matches [1];
			}
		}
		return false;
	}
}