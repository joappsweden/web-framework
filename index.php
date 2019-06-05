<!DOCTYPE html>
<?php

include_once 'init.php';

echo UI\Element\MainView::setTitle('Hello world!')
->setAuthor('Johann Malm')
->setDescription('A new website')
->setKeywords('hello, world, website')

->setStyle('style')
->setScript('app')

->setContent('hello world');

?>
