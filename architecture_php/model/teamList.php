<?php

$teamList = getTeamList();

?>

<ul>
    <?php
        foreach ($teamList as $teamMember) {
            echo '<li class="list-group-item">'.$teamMember.'</li>';
        }
    ?>
</ul>

