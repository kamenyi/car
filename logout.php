<?php

    $title = "ABC-CAR | Home";

    require_once 'config/db.php';

    require_once 'partials/head.php';
    require_once 'partials/nav.php';

    require_once 'partials/footer.php';

?>

<?php


unset($_SESSION['userID']);
session_destroy();
header('Location: index.php');
?>

