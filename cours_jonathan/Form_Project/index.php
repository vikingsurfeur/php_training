<?php

require_once 'Form.php';
require_once 'Conversion.php';
$form = new Form($_POST);

?>

<form action="#" method="post">
    <?php
        echo $form->input('username','text');
        echo $form->input('password', 'password');
        echo $form->submit();
        var_dump($_POST['username']);
        var_dump($_POST['password']);
        echo '<br>';
        echo Conversion::getZero(9); // Call my static function with :: in Conversion Object without instance
    ?>
</form>
