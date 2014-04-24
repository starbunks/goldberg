<?php
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$question = $_POST['question'];
	$honeypot = $_POST['comments'];
	$errors = array();
	
	if($honeypot != ""){
		$errors[count($errors)] = "There is a honeypot value fail whale";
	}
	if(!hasvalue($email)){
		$errors[count($errors)] = "Email has no value";
	}	
	if(!hasvalue($question)){
		$errors[count($errors)] = "Question has no value";
	}
	
	if(!$errors){
		$to = "info@goldberglawoffice.com";
		$message = ""
		. "email: " . $email . "<br />" 
		. "phone: " . $phone . "<br/>" 
		. "question: " . $question;
		$result = sendmail($to, $subject, $message, $email);
		echo($result);
		exit;
	}else{
		 for($i=0; $i<count($errors); $i++){
			echo($errors[$i] . '<br/>');
		}
		 exit;
	}
	
	function sendmail($to, $subject, $message, $from) {
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		$headers .= 'From: ' . $from . "\r\n";
		 
		$result = mail($to,$subject,$message,$headers);
		
		if ($result) return 1;
		else return 0;
	}

	function hasvalue($value){
		if(!isset($value)){
			return false;
		}else{
			if($value == ""){
				return false;
			}else{
				return true ;
			}
		}
	}
?>