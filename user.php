<?php

class User{
	// master revised
	public function __construct(){
		/*
			1. new Branch
			
			2. revise and sync to master
		
		
		*/		
	}
	
	public function get_user_data($account, $user_id=FALSE){
		if($user_id){
			$sql_user_data = "SELECT * FROM `jianda_user_administrator` WHERE `admin_id` = ? ";
			$query_user_data = $this->db->query($sql_user_data, array($user_id));
			return $query_user_data->result_array();
		}else{
			$sql_user_data = "SELECT * FROM `jianda_user_administrator` WHERE `admin_account` LIKE ? ";
			$query_user_data = $this->db->query($sql_user_data, array($account));
			return $query_user_data->result_array();
		}
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