<?php

$_SERVER['DOCUMENT_ROOT'] . '/php_training/php_serv_env_session/session/defi_session/model/header.php';

session_start();

if (!isset($_COOKIE['visitorCount'])) {
    setcookie('visitorCount', 1, time() + 86400);
} else {
    $visitorCount = (int)$_COOKIE['visitorCount'] + 1;
    setcookie('visitorCount', $visitorCount, time() + 86400);
}

echo sprintf("Vous avez visité cette page %s fois <br/>", $_COOKIE['visitorCount']);

$_SESSION['username']  = $_POST['username'];
$_SESSION['email']     = $_POST['email'];

if ($_SESSION['username'] && $_SESSION['email']) {
    echo 'Heureux de vous revoir '.$_SESSION['username'].'<br>';
    echo 'Votre addresse IP est : '.$_SERVER['REMOTE_ADDR'];
}

?>

<form action="session_off.php" method="POST">
    <label>Pour vous déconnecter, appuyez sur ce bouton : </label>
    <button type="submit">Deconnexion</button>
</form>

<?php

$_SERVER['DOCUMENT_ROOT'] . '/php_training/php_serv_env_session/session/defi_session/model/footer.php'

?>