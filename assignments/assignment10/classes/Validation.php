<?php
class Validation{
	private $error = false; // set to true if one or more errors is found

	public function checkFormats($array)
	{
		$returnVals = array();
		foreach($array as $k=>$v){
			switch($k){
				case "name":
					$returnVals['name'] = $this->name($v);
					break;
				case "address":
					$returnVals['address'] = $this->address($v);
					break;
				case "city":
					$returnVals['city'] = $this->city($v);
					break;
				case "phone":
					$returnVals['phone'] = $this->phone($v);
					break;
				case "email":
					$returnVals['email'] = $this->email($v);
					break;
			}
		}
		return $returnVals;
	}
	
	private function name($value){
		$match = preg_match('/^[a-z-\' ]{1,50}$/i', $value);
		return $this->setError($match);
	}
	private function address($value){
		$match = preg_match('/\d+(\s\w+){1,}/', $value);
		return $this->setError($match);
	}
	private function city($value){
		$match = preg_match('/[A-Za-z]{3,}/', $value);
		return $this->setError($match);
	}
	private function phone($value){
		$match = preg_match('/\d{3}\.\d{3}.\d{4}/', $value);
		return $this->setError($match);
	}
	private function email($value){
		$match = (filter_var($value, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
		return $this->setError($match);
	}
	private function setError($match){
		if(!$match){
			$this->error = true;
			return true;
		} else {
			return false;
		}
	}
	
	public function checkErrors(){
		return $this->error;
	}
	
}
