<?php
$to = "sadia294@gmail.com";
$subject = "Azauj Enquiries (number)";

$Number=$_POST['number1'];

$txt = "Number: ".$Number;
$headers = $Email. "\r\n" .
    "CC: zitavincenza@gmail.com";

mail($to,$subject,$txt,$headers);
header('location:index.html');
?>