<?php
include 'config.php';
include 'autoloader.php';

//DB!!
$instance = DB::getInstance();
$conn = $instance->getConnection();
var_dump($conn);
?>