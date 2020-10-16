<?php

loaderModel('Login');
$exception = null;

if(count($_POST) > 0) {
    $login = new Login($_POST);
    try{
        $user = $login->checkLogin();
        header("Location: day_records.php");
    } catch(AppException $e){
        $exception = $e;
    }
}

loaderView('login', $_POST + ['exception' => $exception]);