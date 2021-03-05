<?php

// Include HEADER
include_once $_SERVER['DOCUMENT_ROOT'] . '/php_training/architecture_php/model/header.php'; // $_SERVER['DOCUMENT ROOT] => Sert à déterminer la racine de mon projet

?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2>Découvrez notre équipe</h2>
            <h3>Développeur, Designer, Community Manager</h3>
            <h4>Notre équipe : </h4>
            <h5><?php include_once $_SERVER['DOCUMENT_ROOT'] . '/php_training/architecture_php/model/teamList.php'; ?></h5> 
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
                quaerat sed rerum rem doloremque quae tempore aliquid, quas
                velit consequatur? Doloremque officia neque, omnis, modi, atque
                tempora optio ad iure explicabo saepe eveniet. Hic, veritatis
                placeat itaque architecto blanditiis quidem.
            </p>
        </div>
    </div>
</div>

<?php

// Include FOOTER
include_once $_SERVER['DOCUMENT_ROOT'] . '/php_training/architecture_php/model/footer.php';

?>