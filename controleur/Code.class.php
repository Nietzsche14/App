<?php
class Code{
	protected $code;
	
	public function __construct($clePriv,$idWorker){
		$this->code=hash('sha256',$clePriv.$idWorker);
	}
	public function getCode(){
		return $this->code;
	}
}