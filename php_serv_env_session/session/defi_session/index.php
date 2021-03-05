<?php

if (!isset($_POST['username']) && (!isset($_POST['email']))) {
    require_once 'form.php';
} else {
    require_once 'session.php'; 
}