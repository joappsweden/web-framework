<?php

/**
 * TextView
 */
class TextView extends View
{
  private $text;
  private $font;

  function __construct($text)
  {
    $this->text = $text;
  }

  public static function setText($text)
  {
    return new self($text);
  }

  public function setFont($font)
  {
    $this->font = $font;
    return $this;
  }

  public function __toString()
  {
    $text = $this->text;
    $classString = $this->getClasses();

    switch ($this->font) {
      case 'title':
        $this->html = "<h1 class='text title$classString'>$text</h1>";
        break;

      case 'subtitle':
        $this->html = "<h2 class='text subtitle$classString'>$text</h2>";
        break;

      case 'preamble':
        $this->html = "<h3 class='text preamble$classString'>$text</h3>";
        break;

      case 'body':
        $this->html = "<p class='text body$classString'>$text</p>";
        break;

      default:
        $this->html = "<p class='text body$classString'>$text</p>";
        break;
    }

    return (string) $this->html;
  }
}


?>
