<?php
function autoloader($classname)
{
    $filename = __DIR__ . '/' . $classname . '.php';
    require_once($filename);
}
spl_autoload_register('autoloader');
?>