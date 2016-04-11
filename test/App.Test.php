<?php

require_once 'lib/Curl.php';
use Libs\Curl;

/**
* 
*/
class AppTest extends PHPUnit_Framework_TestCase {

	protected function setUp(){
		//
	}

	protected function tearDown(){
		//
	}

	public function testCurlReturnsValidJSON(){
		$data = json_decode(Curl::loadURL('https://api.kent.ac.uk/api/v1/blogs/kbs-news-events/posts_per_page/5'));
		$this->assertTrue(isset($data->posts));
	}
}