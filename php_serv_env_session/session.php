<?php

// CREATE A SESSION
session_start();

// CREATE A USER SESSION
$_SESSION['username'] = 'JohnDoe';
echo "Bonjour " . $_SESSION['username'];
print_r($_SESSION);

// DESTROY THE USER SESSION
$_SESSION = [];
print_r($_SESSION);
session_destroy();