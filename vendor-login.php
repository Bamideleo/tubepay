<?php

require_once('./assets/init.php');


$color1 = '0095D8';
$color2 = '87ddff';
$errors   = '';
$username = '';
if (!empty($_POST)) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $_SESSION['error_message'] = "working.....";
            header("Location: " . PT_Link('error=Email+missing'));
            exit();
    } 

 
}

echo 'working';



