<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>ArchitecturePHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= routeUrl() ?>public/css/bulma.css" rel="stylesheet">
</head>
<body>
    <?php
    $url = "";
    $Pages = array('Home', 'SignIn', 'SignUp');
    include "views/commun/header/header.php";

    if (isset($_GET['query'])) {
        $url = explode('/', $_GET['query']);
        if ($url == "") {
            require "views/page/Home.php";
        } elseif (in_array($url[0], $Pages)) {
            require "views/page/" . $url[0] . ".php";
        }else{
            require "views/error/404.php";
        }
    }else{
        require "views/page/Home.php";
    }

    include "views/commun/footer/footer.php";
    ?>
</body>
</html>