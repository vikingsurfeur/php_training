<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/php_training/php_serv_env_session/session/defi_session/model/header.php';

?>
        <form method="POST" action="session.php">
            <label for="name">Votre nom : </label>
            <input
                type="text"
                name="username"
                id="name"
                value=""
                placeholder="Saisissez votre nom"
            />
            <label for="email">Votre adresse e-mail : </label>
            <input
                type="email"
                name="email"
                id="email"
                value=""
                placeholder="Saisissez votre e-mail"
            />
            <button type="submit">Soumettre le formulaire</button>
        </form>
<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/php_training/php_serv_env_session/session/defi_session/model/footer.php';

?>
