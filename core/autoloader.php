<?php
spl_autoload_register(function ($class) {
    require_once ROOT.'/class/' . $class . '.class.php';
});
