<?php

/**
 * ButtonView
 */
class ButtonView extends View
{
  private $event = [];
  private $text;

  function __construct($text)
  {
    $this->text = $text;
  }

  public static function setText($text)
  {
    return new self($text);
  }

  public function setEvent($eventType, $event)
  {
    $this->event[$eventType] = $event;
    return $this;
  }

  public function __toString()
  {
    $event = "";
    $text = $this->text;
    $classString = $this->getClasses();

    if (count($this->event) > 0) {
      foreach ($this->event as $key => $value) {
        $event .= "$key = '$value' ";
      }

      $event = ' ' . trim($event, ' ');
    }

    $this->html = "<button class='button$classString'$event>$text</button>";

    return (string) $this->html;
  }
}


?>
