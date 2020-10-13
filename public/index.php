<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
// require_once(VIEW_PATH . '/login.php');


require_once(MODEL_PATH . '/Login.php');

$login = new Login([
    'email' => 'admin@cod3r.com.br',
    'password' => 'a'
]);

try{
    $login->checkLogin();
    echo 'Deu certo';
} catch(Exception $e) {
    echo 'Problema no login';
}

// $user = new User(['name'=>'Guto', 'email'=>'email@email.com']);
// // echo $user->getSelect('id, name');

// print_r(User::get(['name'=> 'Chaves'], 'id, name, email')); 

// echo '<br>';
// print_r(User::get([], 'name'));
// echo '<br>';
// foreach(User::get([], 'name') as $user) {
//     echo $user->name;
//     echo '<br>';
// }