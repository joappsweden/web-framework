<?php

/**
 * AnchorView
 */
class AnchorView extends View
{
  private $text;
  private $reference;

  function __construct($text)
  {
    $this->text = $text;
  }

  public static function setText($text)
  {
    return new self($text);
  }

  public function setReference($reference)
  {
    $this->reference = $reference;
    return $this;
  }

  public function __toString()
  {
    $view = self::setTag('a')
    ->setAttribute('class', 'anchor')
    ->setAttribute('href', $this->reference)
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
