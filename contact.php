<?php

    // print_r($_POST['user']);

    // PRINT THE USER VALUE

    function printUserValue($key) {

        if(!isset($_POST[$key])) {
            echo sprintf('Cette %s n\'existe pas, merci de là renseigner <br/>', $key);
            return;
        } else {
            echo sprintf('Cette valeur de clef %s vaut : <br/>', $key);
            echo $_POST[$key].'<br/>';
        }
        
    }

    printUserValue('userEmail');
    printUserValue('userPassword');
    printUserValue('userConfirm');