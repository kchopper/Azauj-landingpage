<?php
$to = "pxkwsfzc@mailparser.io";
$subject = "Azauj Enquiries";
$Name=$_POST['name'];
$Number=$_POST['number'];
$Email=$_POST['email'];
$txt = "Name: ".$Name.  "\nNumber: " .$Number. "\nEmail: ".$Email;
$headers = $Email. "\r\n" .
"CC: zitavincenza@gmail.com";

mail($to,$subject,$txt,$headers);
header('location:index.html');
exit();
?>