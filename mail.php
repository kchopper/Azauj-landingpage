<?php 

 // $url = 'https://api.sendgrid.com/';
 // $user = 'Hassan.syed';
 // $pass = 'Azaujpass011';

$url = getenv('APPSETTING_EMAIL_URI');
$user = getenv('APPSETTING_EMAIL_UNAME');
$pass = getenv('APPSETTING_EMAIL_PASS');

// $url = 'EMAIL_URI';
// $user = 'EMAIL_UNAME';
// $pass = 'EMAIL_PASS';


$Name=$_POST['name'];
$Number=$_POST['number'];
$Email=$_POST['email'];


 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'pxkwsfzc@mailparser.io',
      'subject' => 'Azauj Enquiries',
      'html' => 'Name :' .$Name. 'Number: '.$Number. 'Email:' .$Email,
      'text' => 'testing body2',
      'from' => 'hamza.bhinder@azauj.com',
   );

 $request = $url.'api/mail.send.json';
 // Generate curl request
 $session = curl_init($request);
 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);
 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
 // curl_setopt($session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt ($session, CURLOPT_CAINFO, "Certificates/cacert.pem");  
 // obtain response
 $response = curl_exec($session);
 if (curl_errno($session)) { 
   print curl_error($session); 
 } 
 curl_close($session);
 
 // print everything out
 // print_r($response);

 // redirects to the homepage
 header('location:index.html');

 ?>