<?php 
	if($_POST) {

		$to = "novayapochtacyka@gmail.com"; // Your email here
		$subject = 'Message from my website'; // Subject message here

	}

	//Send mail function
	function send_mail($to,$subject,$message,$headers){
		if(@mail($to,$subject,$message,$headers)){
			echo json_encode(array('info' => 'success', 'msg' => "Ваше сообщение было отправлено. Спасибо!"));
		} else {
			echo json_encode(array('info' => 'error', 'msg' => "Ошибка, ваше сообщение не было отправлено"));
		}
	}

	//Sanitize input data, remove all illegal characters	
	$name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	$website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
	$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

	//Validation
	if($name == '') {
		echo json_encode(array('info' => 'error', 'msg' => "Пожалуйста введите ваше имя."));
		exit();
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo json_encode(array('info' => 'error', 'msg' => "Пожалуйста введите правильную почту."));
		exit();
	}
	if($message == ''){
		echo json_encode(array('info' => 'error', 'msg' => "Пожалуйста введите ваше сообщение."));
		exit();
	}

	//Send Mail
	$headers = 'From: ' . $email .''. "\r\n".
	'Reply-To: '.$email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	send_mail($to, $subject, $message . "\r\n\n"  .'Имя: '.$name. "\r\n" .'Email: '.$email, $headers);
?>