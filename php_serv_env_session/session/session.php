<?php

// FIRST : CREATE A SESSION
session_start(); // This method create the PHPSESSID COOKIE

if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

if (isset($_SESSION['username'])) {
    echo 'Bonjour '.$_SESSION['username'];
} else {
    include_once 'form.html';
}

// // CREATE A USER SESSION
// $_SESSION['username'] = 'JohnDoe';
// echo "Bonjour " . $_SESSION['username'];
// print_r($_SESSION);

// // DESTROY THE USER SESSION
unset($_SESSION['username']); // or for example $_SESSION = [];
// print_r($_SESSION);
setcookie('PHPSESSID', '', time() - 60); 
session_destroy();