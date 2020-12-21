<?php

//$input = $_POST['name'];
$input = $_POST;
$errorMsg = [];
//email ellenorzes
if (!filter_var($input['mail'], FILTER_VALIDATE_EMAIL)) {
    $errorMsg['mail'] =  $input['mail']." is not a valid email address";
}
//radio
if (!isset($input['gender'])) {
    $errorMsg['gender'] =  " a nemet ki kell tölteni";
}

if (count($errorMsg) != 0) {
    $errorMsg['success'] = false;
}else{
    $errorMsg['success'] = true;

$allowed =  array('gif','png' ,'jpg', 'jpeg');
$filename = $_FILES['video_file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!in_array($strtolower($filename);,$allowed) ) {
    echo 'error';
}
//Level osszerakas
    /*$msg = "Mail erkezett \n";
    $msg .= "telefonszam: ".$input['tel'];
     //mail("someone@example.com","My subject",$msg);
    */
}
//valasz
header('Content-Type: application/json');
echo json_encode($errorMsg);
exit();


?>