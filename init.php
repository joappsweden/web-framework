<?php

spl_autoload_register(function ($class_name) {
    include_once('./library/' . $class_name . '.php');
});

?>
