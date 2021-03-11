<?php

function readContactFile()
{
    $file = 'contact.txt';
    if (!is_file($file)) {
        return null;
    }
    return file_get_contents($file);
}

function writeInContactFile($message)
{
    $file = 'contact.txt';
    if (!is_file($file)) {
        $current = '';
    } else {
        $current = file_get_contents($file);
    }
    $current .= $message;
    $current .= PHP_EOL;
    file_put_contents($file, $current);
}

function sendUserMessage() {
    $errorMsg   = "Vous n'avez pas renseigné tous les champs, veuillez resaisir les informations";
    if ((!empty($_POST['name']) && !empty(trim($_POST['name']))) && 
            (!empty($_POST['email']) && !empty(trim($_POST['email']))) && 
                (!empty($_POST['message']) && !empty(trim($_POST['message'])))) {
        echo require_once 'message.html';
    } else {
        echo $errorMsg;
    }
}

// CALL THE FUNCTIONS

readContactFile();
writeInContactFile($_POST['message']);
sendUserMessage();

// LOOP FOR A NEW ARRAY

foreach ($_POST as $key => $value) {
    echo "$key => $value <br>";
}

