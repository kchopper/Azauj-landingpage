<?php

$to = "hamza.bhinder@gmail.com";
$subject = "Azauj Enquiries";
$Name=$_POST['name'];
$Number=$_POST['number'];
$Email=$_POST['email'];
$txt = "Name: ".$Name. "Number: " .$Number. "Email: ".$Email;
$headers = $Email. "\r\n" .
"CC: somebodyelse@example.com";

mail($to, $subject, $txt, $headers);
header('location:index.html');
