<?php session_start();

// IMPORT CLASSES
spl_autoload_register(
    function ($class) {
        ## classes are just imported whenever they are needed
        require_once ("classes/" . $class . ".class.php");
    }
);

$database = new Database();
$conn = $database->getConn();

include 'Model.php';
$model = new Model($conn);
