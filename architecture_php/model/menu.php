<?php

const PAGE_INDEX    = 'http://localhost:8080/php_training/architecture_php/index.php';
const PAGE_TEAM     = 'http://localhost:8080/php_training/architecture_php/pages/team.php';
const PAGE_ABOUT    = 'http://localhost:8080/php_training/architecture_php//pages/about.php';


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo isCurrentUrl(PAGE_INDEX); ?>">
            <a 
            href="<?php echo PAGE_INDEX; ?>" 
            class="nav-link">Home</a>
        </li>
        <li class="nav-item <?php echo isCurrentUrl(PAGE_TEAM); ?>">
            <a 
            href="http://localhost:8080/php_training/architecture_php/pages/team.php" 
            class="nav-link">Team</a>
        </li>
        <li class="nav-item <?php echo isCurrentUrl(PAGE_ABOUT); ?>">
            <a 
            href="http://localhost:8080/php_training/architecture_php/pages/about.php" 
            class="nav-link">About</a>
        </li>
    </ul>
</nav>