<?php
$from=$_REQUEST['emailInput'];
$subject=$_REQUEST['subjectInput'];
$message=$_REQUEST['messageInput'];

$to="forese@svce.ac.in";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <$from>" . "\r\n";

mail($to,$subject,$message,$headers);

echo "<script>window.location.href='http://www.forese.in';</script>";
?>