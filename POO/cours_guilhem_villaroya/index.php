<?php
include_once 'header.php';
?>

<h1>POO Classes Introduction with Guilhem Villaroya</h1>

<p>Nous allons créer une instance de student</p>

<?php
$studentDavid = new Student(
    'Bouscarle',
    'David',
    40,
    'Mas de Carcarille',
    84200,
    'Gordes'
);
?>

<p><?php echo $studentDavid->sayHello(); ?></p>


<?php
include_once 'footer.php';
?>
