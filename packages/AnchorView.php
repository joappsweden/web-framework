<?php

/**
 * AnchorView
 */
class AnchorView extends View
{
  private $href;
  private $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  public static function setText($text)
  {
    return new self($text);
  }

  public function setHref($href)
  {
    $this->href = $href;
    return $this;
  }

  public function __toString()
  {
    $href = $this->href;
    $text = $this->text;
    $classString = $this->getClasses();

    $this->html = "<a class='anchor$classString' href='$href'>$text</a>";

    return (string) $this->html;
  }
}


?>
