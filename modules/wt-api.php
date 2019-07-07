<?php 
	class wt_api{
		private $error = false;
		
		function request ($num){
			$url = "https://s3.amazonaws.com/data-production-walltime-info/production/dynamic/walltime-info.json?now=".$num."";
			$response = @file_get_contents($url);
			return json_decode($response, true);
		}

		function is_error(){
			return $this-> error;
		}

		function valor_bitcoin(){
			$data = $this->request(mt_rand(10,100));
			if(!empty($data) && is_array($data['BRL_XBT'])){
				$this->error = false;
				return $data['BRL_XBT'];
			} else{
				$this ->error = true;
				return false;
			}
		}
	}
?>