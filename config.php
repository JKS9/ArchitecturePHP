<?php
session_start();

// affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

// chargement du fichier connection BDD
require_once("configBdd.php"); 

// autoload 
spl_autoload_register('chargerClasse');
$classe = "";
function chargerClasse($classe){
    include 'models/' . $classe . '.class.php';
}

// function route, permet d'avoir le chemin de la racine du projet
function routeUrl(){
    $nbslash = '';
    if(isset($_GET['p'])){
        $nburl = count(explode('/', $_GET['p']));
        if($nburl !== 0){
            for($i=1; $i < $nburl; $i++){
                $nbslash .= "../";
            }
        }
    }
    return $nbslash;
}
?>