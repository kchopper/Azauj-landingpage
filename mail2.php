<?php


	session_start();

	require_once 'phpmailer/PHPMailerAutoload.php';


    $error = [];

	if (isset($_POST['name'], $_POST['email'], $_POST['number'])) {
		
		$fields=[
                
               'name'=> $_POST['name'],
               'email'=> $_POST['email'],
               'number'=> $_POST['number']
		];

		foreach ($fields as $field => $data) {
			if (empty($data)) {
				$error[]='the'. $field . 'field is required';


			}
		}


        if (empty($error)) {
        	
        	$m = new PHPMailer;
        	$m ->isSMTP();
        	$m ->SMTPAuth = true;
        	$m ->Host ='smtp.gmail.com';
        	$m ->Username = 'hamza.bhinder@gmail.com';
        	$m->Password='**********';
        	$m ->SMTPSecure = 'ssl';
        	$m ->Port =465;

            $m->isHTML();
        	$m->Subject='Azauj Contact form';
            $m->Body = 'Form:' . $field['name'] . ' ' . $field['email'] . ' ' . $field['number'] . '  ';
            $m->FromName = 'Contact';
            $m->AddAddress('hamza.bhinder@gmail.com','Hamza Ali Haider');

            if ($m->send()) {
            	
            	header('location:index.html');
            	die();
            }
            
            else {

            	$error[]='sorry sorry sorry';
            }




        }


           
			}

		else{

			$error[]='something went wrong';
		}



		header('location:index.html');