<!DOCTYPE html>
<?php

include_once 'init.php';

$nav = UI\Component\NavigationComponent::setName('Johann Malm')
->setItem('#', 'Link')
->setItem('#', 'Link')
->setItem('#', 'Link')
->setItem('#', 'Link')
->setItem('#', 'Link');

echo UI\Element\MainView::setTitle('Johann Malm')
->setAuthor('Johann Malm')
->setDescription('A new website')
->setKeywords('hello, world, website')

->setStyle('main')
->setStyle('component')
->setScript('app')

->setContent($nav);

?>
