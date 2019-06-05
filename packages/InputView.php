<?php

/**
 * InputView
 */
class InputView extends View
{
  private $placeholder;
  private $name;
  private $id;
  private $type;

  function __construct($placeholder)
  {
    $this->placeholder = $placeholder;
  }

  public static function setPlaceholder($placeholder)
  {
    return new self($placeholder);
  }

  public function setType($type)
  {
    $this->type = $type;
    return $this;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function __toString()
  {
    $placeholder = $this->placeholder;
    $name = $this->name;
    $id = $this->id;
    $classString = $this->getClasses();
    $attribute = $this->getAttributes();

    switch ($this->type) {
      case 'text':
        $this->html = "<input class='input$classString' type='text' name='$name' id='$id' placeholder='$placeholder'$attribute>";
        break;

      case 'password':
        $this->html = "<input class='input$classString' type='password' name='$name' id='$id' placeholder='$placeholder'$attribute>";
        break;

      case 'file':
        $this->html = "<input class='input$classString' type='file' name='$name' id='$id' placeholder='$placeholder'$attribute>";
        break;

      case 'textarea':
        $this->html = "<textarea  class='input$classString' type='file' name='$name' id='$id' placeholder='$placeholder'$attribute></textarea>";
        break;

      default:
        $this->html = "<input class='input$classString' type='text' name='$name' id='$id' placeholder='$placeholder'$attribute>";
        break;
    }

    return (string) $this->html;
  }
}


?>
