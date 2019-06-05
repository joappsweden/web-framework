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
    $title = $this->title;

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<meta charset='utf-8'>";
    echo "<title>$title</title>";
    echo "<link rel='stylesheet' href='./public/style.css'>";
    echo "</head>";
    echo "<body>";

    ($this->content)();

    echo "</body>";
    echo "</html>";

  }
}


?>
