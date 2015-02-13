<?php

require_once(__DIR__.'/ClassMap.php');
class RegistrationHandler{
	
	private $registered ;
	private $userBS ;
	public function __construct(){
		$this->registered = false;
		$this->userBS = new UserBusinessServices ;
		
	}
	/**
	 * 
	 * User is done here Registration 
	 * @param unknown_type $postParams
	 */
	public function registerNewUser($postParams){

		return $this->registered=  $this->userBS->registerUser($postParams);
	}
}

if(isset($_POST)) {
	
	$regHandler = new RegistrationHandler;
	$isRegistered = $regHandler->registerNewUser($_POST);
	if($isRegistered){
		
		header("Location: /zoowiproject/regsuccess.php");
		exit(0);   
	} else {
		
		echo " Registration Failed" ;
	}
}