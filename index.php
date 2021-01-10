<?php

define('kliot', realpath('./'));

require kliot . './core/KliotLoader.php';

spl_autoload_register('\\Core\\KliotLoader::load');

require kliot . './bootstrap/app.php';
