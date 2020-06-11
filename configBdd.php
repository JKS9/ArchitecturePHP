<?php
require("data.php");

$connect = new PDO('mysql:host='.$HOST.';dbname='.$DB_NAME.'',''.$DB_LOGIN.'', ''.$DB_PASSWORD.'');
$connect->exec("SET NAMES 'UTF8'");

if(isset($connect)) {
    echo "bdd connecter";
} else {
    echo "non connecter";
}
?>