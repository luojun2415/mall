<?php
if (!function_exists('fixUrl')) {
	/**
	 * $url后自动添加/
	 * @param string $url
	 * @param string $fix
	 * @return string|unknown
	 */
	function fixUrl($url, $fix = true) {
		if (substr($url, -1, 1) == '/') {
			if (!$fix) {
				return substr($url, 0, strlen($url) - 1);
			}
		} else {
			if ($fix) {
				return $url . '/';
			}
		}
	
		return $url;
	}
}
