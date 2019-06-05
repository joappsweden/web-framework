<style>

.text {
  font-size: 4rem;
}

.body {
  font-weight: bold;
}

</style>
<?php

include_once 'init.php';

$paragraph = View::setTag('p')
->setAttribute('class', 'text')
->setAttribute('class', 'body')
->setContent('Hello, world!');

echo View::setTag('div')
->setAttribute('class', 'section')
->setContent($paragraph);

?>
