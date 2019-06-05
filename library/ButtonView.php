<?php

/**
 * ButtonView
 */
class ButtonView extends View
{
  private $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  public static function setText($text)
  {
    return new self($text);
  }

  public function __toString()
  {
    $view = self::setTag('button')
    ->setAttribute('class', 'button')
    ->setContent($this->text);

    foreach ($this->getAttribute() as $key => $value) {
      foreach ($value as $attribute) {
        $view->setAttribute($key, $attribute);
      }
    }

    return (string) $view;
  }
}


?>
