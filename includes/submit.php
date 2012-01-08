<?php
	//variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comment = $_POST['comment'];
	$error = "";

	//validate
	if( $email == '' ){
		$error .= "please enter your email address<br/>";
	} else if( !validEmail($email) ){
		$error .= "please re-enter your email address <br/>(example: myname@domain.com or hisname@domain.co.jp )<br/>";
	}
	if( $comment == '' ){
		$error .= "please enter a comment<br/>";
	}

	if( $error == "" ){
		//construct message
		$emailmessage = "name: ".$name."\n\n email: ".$email."\n\n comment: ".$comment;

		//send it!
		mail('makinoblog@gmail.com',"Someone sent you a comment on yomakino.com",mb_convert_encoding( $emailmessage, "utf-8", "HTML-ENTITIES" ));
		mail('tanaka.cliff@gmail.com',"Someone sent a comment on yomakino.com",mb_convert_encoding( $emailmessage, "utf-8", "HTML-ENTITIES" ));

		echo "good";
	} else {
		echo $error;
	}

	function validEmail($email){
	   return filter_var( $email, FILTER_VALIDATE_EMAIL );
	}
?>