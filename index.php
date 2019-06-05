<!DOCTYPE html>
<?php

include_once 'init.php';

echo MainView::setTitle('Hello world!')
->setAuthor('Johann Malm')
->setDescription('A new website')
->setKeywords('hello, world, website')

->setStyle('style')
->setScript('app')

->setContent(SectionView::setId('test')
  ->setTextAlignmentToCenter()
  ->setContent(TextView::setText('Hello, world!')->setFontToHeadline()->setPadding())
  ->setContent(TextView::setText('Another cool application.')->setPadding())
  ->setContent(ImageView::setSource('image.jpg')->setPaddingOne())
  )

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
