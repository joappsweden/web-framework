<?php

namespace UI\Component;

use \UI\Element\View;
use \UI\Element\AnchorView;
use \UI\Element\TextView;

/**
 * NavigationComponent
 */
class NavigationComponent
{
  private $name;
  private $item = [];

  public function __construct($name)
  {
    $this->name = $name;
  }

  public static function setName($name)
  {
    return new self($name);
  }

  public function setItem($href, $text)
  {
    $this->item[] = [
      "href" => $href,
      "text" => $text
    ];

    return $this;
  }

  public function __toString()
  {
    $view = View::setTag('nav')
    ->setAttribute('class', 'navigation')
    ->setBackgroundDark()
    ->setPadding()
    ->setContent(View::setTag('div')
      ->setAttribute('class', 'navigation-title')
      ->setTextAlignmentToCenter()
      ->setContent(TextView::setText($this->name)
        ->setFontToBrand()
      )
    );

    if (count($this->item) > 0) {
      foreach ($this->item as $item) {
        $view->setContent(View::setTag('div')
        ->setAttribute('class', 'navigation-item')
        ->setTextAlignmentToCenter()
        ->setContent(AnchorView::setText($item['text'])
          ->setReference($item['href'])
        ));
      }
    } else {
      $view->setContent('');
    }

    return (string) $view;
  }
}


?>
