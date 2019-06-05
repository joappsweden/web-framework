<?php

include_once 'init.php';

Main::setTitle('Hello')
  ->setContent(function () {

    echo TextView::setText('Hello, world!')
          ->setFont('title')
          ->setHorizontalPadding()
          ->setBottomPadding(1);

    echo TextView::setText('Subscribe')
          ->setFont('label')
          ->setHorizontalPadding();

    echo InputView::setPlaceholder('your@domain.com');

    echo TextView::setText('Hello')
          ->setFont('subtitle')
          ->setHorizontalPadding()
          ->setBottomPadding(1);

    echo ButtonView::setText('This is a button')
          ->setEvent('onclick', 'alert(1)')
          ->setMargin();

    echo ButtonView::setText('This is a button')
          ->setEvent('onclick', 'alert(2)')
          ->setMargin();

    echo ButtonView::setText('This is a button')
          ->setEvent('onclick', 'alert(3)')
          ->setMargin();

    echo ButtonView::setText('This is a button')
          ->setEvent('onclick', 'alert(4)')
          ->setMargin();

    echo ButtonView::setText('This is a button')
          ->setEvent('onclick', 'alert(5)')
          ->setMargin();

    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id convallis tortor, at finibus tellus. Cras hendrerit aliquam massa, tincidunt maximus dolor tincidunt nec. Fusce et urna est. Donec tincidunt diam vel orci accumsan accumsan. Pellentesque dictum, libero sit amet gravida tincidunt, tortor urna efficitur ipsum, lobortis condimentum est mauris ut justo. Integer gravida diam ipsum, gravida ullamcorper nunc sodales a. Sed ultrices, leo a posuere tincidunt, felis mi tincidunt odio, ut accumsan elit nibh in sem. Vestibulum vitae faucibus dolor. Vestibulum diam purus, finibus gravida efficitur non, rutrum a orci.';

    foreach ([1,2,3,4,5,6] as $number) {

      echo TextView::setText('Hello ' . $number)
          ->setFont('preamble')
          ->setHorizontalPadding()
          ->setBottomPadding(1);

      echo ImageView::setSource('image.jpg');

      echo TextView::setText($text)
            ->setFont('body')
            ->setHorizontalPadding()
            ->setBottomPadding(1);

      echo AnchorView::setText('Read more')
            ->setHref('#')
            ->setPadding()
            ->setBottomPadding(1);
    }

})->render();

?>