<?php

require 'vendor/autoload.php';
error_reporting(E_ERROR);

$baseDir = '/design-pattern';

if (strpos($_SERVER['REQUEST_URI'], $baseDir) !== 0) {
    exit('error');
}

$pathArr = explode('/', $_SERVER['REQUEST_URI']);

$className = $pathArr[2];

$class = 'Patterns\\'.ucfirst($className).'\\Test';

(new $class())->run();
