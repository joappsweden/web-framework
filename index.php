<!DOCTYPE html>
<?php

include_once 'init.php';

$nav = UI\Component\NavigationComponent::setName('Johann Malm')
->setItem('/link1', 'Link1')
->setItem('/link2', 'Link2')
->setItem('/link3', 'Link3')
->setItem('/link4', 'Link4')
->setItem('/link5', 'Link5');

echo UI\Element\MainView::setTitle('Johann Malm')
->setAuthor('Johann Malm')
->setDescription('A new website')
->setKeywords('hello, world, website')

->setStyle('main')
->setStyle('component')
->setScript('app')

->setContent($nav);

?>
