<?php

ini_set('display_errors', 'on'); // Hide errors for users for production
require_once 'ShortPasswordException.php';

// On XAMPP, right click on config Apache and click php.ini, search display_errors and reboot the server
// Get error log parameters in php.ini

// Class Exception, it's a personnal and tune error for the developpers

// For example, check a new password

$password = 'salutles';

function checkPassword (string $password): void
{
    if (strlen($password) < 10) {
        throw new ShortPasswordException($password);
        // Give a fatal error, we can put a message into parameters of Exception
        // we can also put a code into the second parameters for the getcode() method
    } elseif (ctype_alnum($password)) {
        throw new Exception('Votre mot de passe doit comprendre un caractère spécial !<br>', 2);
        // Give a fatal error, we can put a message into parameters of Exception
    } else {
        echo 'Modification du mot de passe dans la BDD<br>';
    }
}

// Try / Catch / Finally for manage correctly our Exception

try {
    checkPassword($password); // We try updated the password here
} catch (ShortPasswordException $exception) { // If we catch an Exception in our checkPassword function
    echo $exception->getMessage();
    echo $exception->getCode();
    echo $exception->password;
} catch (Exception $exception) {
    echo $exception->getMessage();
    var_dump($exception->getTrace());
} catch (Error $error) {
    echo $error->getMessage();
    die('C\'est la merde fraté');
}
//finally {
//    echo 'Fermeture de la BDD<br>';
//}

// in start of catch an error, Throwable Interface give us a different element and she is implement by the newest exception
// next, the Exception Object defined a different Method
// in last, the Error Class








