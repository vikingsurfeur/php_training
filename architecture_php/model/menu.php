<?php

const PAGE_INDEX    = '/php_training/architecture_php/header.php';
const PAGE_TEAM     = '/php_training/architecture_php/pages/team.php';
const PAGE_ABOUT    = '/php_training/architecture_php/pages/about.php';


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
            href="/php_training/architecture_php/pages/team.php" 
            class="nav-link">Team</a>
        </li>
        <li class="nav-item <?php echo isCurrentUrl(PAGE_ABOUT); ?>">
            <a 
            href="/php_training/architecture_php/pages/about.php" 
            class="nav-link">About</a>
        </li>
    </ul>
</nav>