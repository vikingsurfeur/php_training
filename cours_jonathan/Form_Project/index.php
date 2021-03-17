<?php
use Tutorial\HTML\BootstrapForm;
use Tutorial\Autoloader;
use Tutorial\Conversion;
require_once './Classes/Autoloader.php';
Autoloader::register();
include_once './modules/header.php';
$bootstrapForm = new BootstrapForm($_POST);
?>

<form class="form" action="#" method="post">
    <?php
        echo $bootstrapForm->input('username','text');
        echo $bootstrapForm->input('password', 'password');
        echo $bootstrapForm->submit();
//        var_dump($_POST['username']);
//        var_dump($_POST['password']);
        echo '<br>';
        echo Conversion::getZero(9); // Call my static function with :: in Conversion Object without instance
    ?>
</form>

<?php
include_once './modules/footer.php';
?>
