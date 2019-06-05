<?php

/**
 * View
 */
class View
{
  protected $html;
  protected $attribute = [];
  protected $classes = [];

  function __construct()
  {

  }

  public function setMargin($size=0)
  {
    if ($size === 0) {
      $this->classes[] = 'margin';
    } else {
      $this->classes[] = 'margin_'.$size;
    }

    return $this;
  }

  public function setPadding($size=0)
  {
    if ($size === 0) {
      $this->classes[] = 'padding';
    } else {
      $this->classes[] = 'padding_'.$size;
    }

    return $this;
  }

  public function setVerticalPadding($size=0)
  {
    if ($size === 0) {
      $this->classes[] = 'vertical_padding';
    } else {
      $this->classes[] = 'vertical_padding_'.$size;
    }

    return $this;
  }

  public function setHorizontalPadding($size=0)
  {
    if ($size === 0) {
      $this->classes[] = 'horizontal_padding';
    } else {
      $this->classes[] = 'horizontal_padding_'.$size;
    }

    return $this;
  }

  public function setTopPadding($size=0)
  {
    if ($size === 0) {
      $this->classes[] = 'top_padding';
    } else {
      $this->classes[] = 'top_padding_'.$size;
    }

    return $this;
  }

  public function setBottomPadding($size=0)
  {
    if ($size === 0) {
      $this->classes[] = 'bottom_padding';
    } else {
      $this->classes[] = 'bottom_padding_'.$size;
    }

    return $this;
  }

  protected function getClasses()
  {
    if (count($this->classes) > 0) {
      $classString = "";

      foreach ($this->classes as $class) {
        $classString .= $class . " ";
      }

      return ' ' . trim($classString, ' ');
    }

    return '';
  }

  public function setAttribute($key, $value)
  {
    $this->attribute[$key] = $value;
    return $this;
  }

  protected function getAttributes()
  {
    if (count($this->attribute) > 0) {
      $attribute = "";
      
      foreach ($this->attribute as $key => $value) {
        $attribute .= "$key = '$value' ";
      }

      return ' ' . trim($attribute, ' ');
    }

    return '';
  }

  public function __toString()
  {
    return (string) $this->html;
  }
}


?>
