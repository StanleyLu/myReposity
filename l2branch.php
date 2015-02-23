<?php

class User{

	public function __construct(){
		
		$testL2 = "L2建立的Branch";	//	from local to server 

		$test = "測試合並衝突";	//	測試衝突
		$test = "測試合並衝突";	//	測試合併
		$test = "測試合並衝突";	//	測試合併

		$test = "Pull request這次真的合並到master上";	//	測試合併
		
	}
	
	
	public function get_user_ip(){
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED'];
		} elseif (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_FORWARDED_FOR'];
		} elseif (!empty($_SERVER['HTTP_FORWARDED'])) {
			$ip = $_SERVER['HTTP_FORWARDED'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

}


?>
