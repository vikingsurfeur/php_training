<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Checking and Securisation</title>
</head>
<body>

    <h1>Data checking and securisation</h1>

    <ul>
        <?php
            $count = is_numeric($_GET['count']); // Give a numeric type to the Verification number or I can use the ctype() method
            // Check if $count is empty with isset() or set a default value with ??
            $name  = (string) 'David';
            $count = ($count = 10 || 20 || 50) ? $count : 10; // Check the number is 10, 20 or 50, if isn't, display 10
            // in_array($count, [10, 20, 50])
            for ($i = 0; $i < $count; $i++) {
                echo '<li>Liste n° '.$i.' '.$name.'</li><br>';
            }

            // Give a type to the function return function hoverRoom(): ?string or for a value/parameters function setMail(?string email): self

            // Example :

            $posts = [
                1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
                ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
                ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
            ];
            $id = ctype_digit($_GET['id']) > 0 ? (int) $_GET['$id'] : die('Un erreur est survenue');
            $post = isset($posts['$id']) ? $posts['id'] : die('Une erreur est survenue');
            echo 'L\'article "'.$post['title'].'" a été publié le '.$post['createdAt']->format('d/m/Y').'.';

        ?>
    </ul>
    
</body>
</html>