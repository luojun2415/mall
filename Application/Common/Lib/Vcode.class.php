<?php

namespace Lib;

class Vcode {
	private $width; // 验证码图片的宽度
	private $height; // 验证码图片的高度
	private $codeNum; // 验证码字符的个数
	private $disturbColorNum; // 干扰元素数量
	private $checkCode; // 验证码字符
	private $image; // 验证码资源
	private $fontPath; // 自定义字体路径
	private $ascii = '';
	private $caculateResult = ''; // 验证码的计算结果
	
	/**
	 * 构造方法用来实例化验证码对象，并为一些成员属性初使化
	 * 
	 * @param int $width        	
	 * @param int $height        	
	 * @param int $codeNum        	
	 */
	function __construct($array) {
		foreach ( $array as $key => $value ) {
			$this->$key = $value;
		}
		$number = ($this->width * $this->height) / 15;
		$number = floor ( $number );
		if ($number > 240 - $this->codeNum)
			$this->disturbColorNum = 240 - $this->codeNum;
		else
			$this->disturbColorNum = $number;
		$this->checkCode = $this->createCheckCode (); // 为成员属性checkCode初使化
		session_start ();
	}
	/**
	 * 用于输出验证码图片，也向服务器的SESSION中保存了验证码
	 * 使用echo 输出对象即可
	 * 
	 * @return string
	 */
	function __toString() {
		$_SESSION ["code"] = strtoupper ( $this->caculateResult ); // 加到session中
		$this->outImg (); // 输出验证码
		return '';
	}
	function putCode() {
		$_SESSION ["code"] = strtoupper ( $this->caculateResult ); // 加到session中
		$this->outImg (); // 输出验证码
		return '';
	}
	private function outImg() { // 通过访问该方法向浏览器中输出图像
		$this->getCreateImage (); // 调用内部方法创建画布并对其进行初使化
		                         // 如果传递了外部字体，使用外部字体，否则使用内置字体
		if (! empty ( $this->fontPath ) && file_exists ( $this->fontPath )) {
			$this->disturbColor ();
			$this->writeTTFText ();
		} else {
			$this->setDisturbColor (); // 向图像中设置一些干扰像素
			$this->writeInnerText (); // 向图像中输出随机的字符串
		}
		$this->outputImage (); // 生成相应格式的图像并输出
	}
	private function getCreateImage() { // 用来创建图像资源，并初使化背影
		$this->image = imagecreatetruecolor ( $this->width, $this->height );
		
		$backColor = imagecolorallocate ( $this->image, 255, 255, 255 ); // 背景色（随机）
		@imagefill ( $this->image, 0, 0, $backColor );
		
		$border = imageColorAllocate ( $this->image, 0, 0, 0 );
		imageRectangle ( $this->image, 0, 0, $this->width - 1, $this->height - 1, $border );
	}
	private function createCheckCode() {
		
		// //随机生成用户指定个数的字符串,去掉了容易混淆的字符oOLlz和数字012
		// $code="345679abcdefghjkmnpqrstuvwxyACDEFGHJKMNPQRSTUVWXY";
		// for($i=0;$i<$this->codeNum;$i++) {
		// $char=$code{rand(0,strlen($code)-1)};
		//
		// $this->ascii.=$char;
		// }
		
		// 随机生成两个一位数,A+B=? 的形式
		$plusA = rand ( 0, 9 );
		$plusB = rand ( 0, 9 );
		
		$this->ascii = array (
				$plusA,
				'+',
				$plusB,
				'=',
				'?' 
		);
		$this->caculateResult = $plusA + $plusB;
		return $this->ascii;
	}
	private function setDisturbColor() {
		// 设置干扰像素，向图像中输出不同颜色的100个点
		for($i = 0; $i <= $this->disturbColorNum; $i ++) {
			$color = imagecolorallocate ( $this->image, rand ( 0, 255 ), rand ( 0, 255 ), rand ( 0, 255 ) );
			imagesetpixel ( $this->image, rand ( 1, $this->width - 2 ), rand ( 1, $this->height - 2 ), $color );
		}
		// 干扰线
		// for($i=0; $i<10; $i++){
		// $color=imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
		// imagearc($this->image,rand(-10,$this->width),rand(-10,$this->height),rand(30,300),rand(20,200),55,44,$color);
		// }
	}
	private function disturbColor() {
		// 设置干扰像素，向图像中输出不同颜色的100个点
		for($i = 0; $i <= $this->disturbColorNum; $i ++) {
			$color = imagecolorallocate ( $this->image, rand ( 0, 255 ), rand ( 0, 255 ), rand ( 0, 255 ) );
			imagesetpixel ( $this->image, rand ( 1, $this->width - 2 ), rand ( 1, $this->height - 2 ), $color );
		}
	}
	/**
	 * 创建指定字体的验证码
	 */
	private function writeTTFText() {
		// 随机颜色、随机摆放、随机字符串向图像中输出
		for($i = 0; $i <= $this->codeNum; $i ++) {
			$fontcolor = imagecolorallocate ( $this->image, 0, 0, 0 );
			$fontSize = 20;
			if ($i == 0) {
				$x = 5;
			} else {
				$x = floor ( $this->width / $this->codeNum ) * $i - 3;
			}
			$y = $this->height - 5;
			// imagechar($this->image, $fontSize, $x, $y, $this->checkCode{$i}, $fontcolor);
			imagefttext ( $this->image, $fontSize, rand ( - 10, 0 ), $x, $y, $fontcolor, $this->fontPath, $this->checkCode {$i} );
		}
	}
	/**
	 * 创建基于gd库的验证码，默认字体
	 */
	private function writeInnerText() {
		// 随机颜色、随机摆放、随机字符串向图像中输出
		for($i = 0; $i < $this->codeNum; $i ++) {
			$fontcolor = imagecolorallocate ( $this->image, rand ( 0, 128 ), rand ( 0, 128 ), rand ( 0, 128 ) );
			$fontSize = rand ( 10, 15 );
			$x = floor ( $this->width / $this->codeNum ) * $i + 3;
			$y = rand ( 0, $this->height - imagefontheight ( $fontSize ) );
			imagechar ( $this->image, $fontSize, $x, $y, $this->checkCode {$i}, $fontcolor );
		}
	}
	private function outputImage() {
		// 自动检测GD支持的图像类型，并输出图像
		ob_clean ();
		if (imagetypes () & IMG_GIF) { // 判断生成GIF格式图像的函数是否存在
			header ( "Content-type: image/gif" ); // 发送标头信息设置MIME类型为image/gif
			imagegif ( $this->image ); // 以GIF格式将图像输出到浏览器
		} elseif (imagetypes () & IMG_JPG) { // 判断生成JPG格式图像的函数是否存在
			header ( "Content-type: image/jpeg" ); // 发送标头信息设置MIME类型为image/jpeg
			imagejpeg ( $this->image, "", 0.5 ); // 以JPEN格式将图像输出到浏览器
		} elseif (imagetypes () & IMG_PNG) { // 判断生成PNG格式图像的函数是否存在
			header ( "Content-type: image/png" ); // 发送标头信息设置MIME类型为image/png
			imagepng ( $this->image ); // 以PNG格式将图像输出到浏览器
		} elseif (imagetypes () & IMG_WBMP) { // 判断生成WBMP格式图像的函数是否存在
			header ( "Content-type: image/vnd.wap.wbmp" ); // 发送标头为image/wbmp
			imagewbmp ( $this->image ); // 以WBMP格式将图像输出到浏览器
		} else { // 如果没有支持的图像类型
			die ( "PHP不支持图像创建！" ); // 不输出图像，输出一错误消息，并退出程序
		}
	}
	function __destruct() { // 当对象结束之前销毁图像资源释放内存
		imagedestroy ( $this->image ); // 调用GD库中的方法销毁图像资源
	}
}