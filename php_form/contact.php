<?php

    $userInfo = $_POST['user'];

    foreach ($userInfo as $userKey => $userValue) {
        echo "[$userKey] = [$userValue] <br/>";
    }

    // print_r($_POST['user']);

    // PRINT THE USER VALUE

    // function printUserValue($key) {

    //     if(!isset($_POST[$key])) {
    //         echo sprintf('Cette %s n\'existe pas, merci de là renseigner <br/>', $key);
    //         return;
    //     } else {
    //         echo sprintf('Cette valeur de clef %s vaut : <br/>', $key);
    //         echo $_POST[$key].'<br/>';
    //     }
        
    // }

    // printUserValue('userEmail');
    // printUserValue('userPassword');
    // printUserValue('userConfirm');

    // CONTROL $_FILES USERAVATAR

    $typeAvatar = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF];
    $typeInfo   = exif_imagetype($_FILES['userAvatar']['tmp_name']);
    $errorType  = !in_array($typeInfo, $typeAvatar);

    if (isset($_FILES['userAvatar'])) {

        if ($_FILES['userAvatar']['error'] !== UPLOAD_ERR_OK) { // CONSTANT ERROR
            echo 'Une erreur est survenue, merci d\'essayer à nouveau';
        } elseif ($_FILES['userAvatar']['size'] > 50000) { // FILE UNDER 50ko
            echo 'La taille de votre image est trop grande ! <br/>';
        } elseif ($errorType) { // ERROR TYPE OF FILE
            echo 'Le format de votre fichier n\'est pas accepté <br/>';
        } else {
            move_uploaded_file($_FILES['userAvatar']['tmp_name'], 
            './img/'.$_FILES['userAvatar']['name']);
            echo 'Le transfert de votre avatar a réussi';
        }

    } else {
        echo 'Veuillez uploader votre image de profil <br/>';
    }