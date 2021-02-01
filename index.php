
<?php

    session_start();


    include 'config.php';
    include 'database.php';
    include 'routes.php';

    # Funktions
    require_once 'functions/user.php';
    require_once 'functions/blog.php';

    include 'views/main.php';
 ?>
