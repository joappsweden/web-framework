<?php

namespace UI\Element;

/**
 * FooterView
 */
class FooterView extends View
{
  private $id = "";

  public function __construct($id)
  {
    $this->id = $id;
  }

  public static function setId($id)
  {
    return new self($id);
  }

  public function __toString()
  {
    $html = self::setTag('div')
    ->setAttribute('class', 'footer')
    ->setAttribute('id', $this->id);

    foreach ($this->getAttribute() as $key => $value) {
      foreach ($value as $attribute) {
        $html->setAttribute($key, $attribute);
      }
    }

    foreach ($this->getContent() as $content) {
      $html->setContent($content);
    }

    return (string) $html;
  }
}


?>
