<?php

declare(strict_types = 1, encoding = 'UTF-8');
error_reporting(E_ALL);
ini_set('display_errors', 'on');

$username   = (string) $_POST['username'];
$password   = $_POST['password'];

echo $username.'<br>';
echo htmlspecialchars($username, ENT_QUOTES);