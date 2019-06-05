<?php

/**
 * Main
 */
class Main
{
  private $title;
  private $content;

  function __construct($title)
  {
    $this->title = $title;
  }

  public static function setTitle($title)
  {
    return new self($title);
  }

  public function setContent($content)
  {
    $this->content = $content;
    return $this;
  }

  public function render()
  {
    ($this->content)();
  }
}


?>
