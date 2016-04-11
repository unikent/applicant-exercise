<?php

namespace Libs;

/**
* 
*/
class Curl
{
	public static function loadURL($url)
	{
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($curl);
		return $data;
	}
}