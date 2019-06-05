<?php

spl_autoload_register(function ($class_name) {
    include_once('./packages/' . $class_name . '.php');
});

?>
