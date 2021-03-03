<?php

if ( ! isset( $_POST['submitted'] ) )
header('Location: ' . $_SERVER['HTTP_REFERER']);

$credentials = [
 
    
    'password' => 'galattici'
];

if ( $credentials['email'] !== $_POST['email'] OR $credentials['password'] !== $_POST['password'] )
{    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

else{

    
}
session_start();

// Storing session data
$_SESSION["isLogged"] = "1";

header('Location:' . '../index.html');

exit();
