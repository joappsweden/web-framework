<!DOCTYPE html>
<?php

include_once 'init.php';

$button = View::setTag('button')
->setAttribute('onclick', 'hello()')
->setContent('Click to be greeted!');

echo MainView::setTitle('Hello world!')
->setAuthor('Johann Malm')
->setDescription('A new website')
->setKeywords('hello, world, website')
->setStyle('style')
->setScript('app')
->setContent('Hello, world!!!')
->setContent($button);

/*
$paragraph = View::setTag('p')
->setAttribute('class', 'text')
->setAttribute('class', 'body')
->setContent('Hello, world!');

echo View::setTag('div')
->setAttribute('class', 'section')
->setContent($paragraph);
*/

?>
