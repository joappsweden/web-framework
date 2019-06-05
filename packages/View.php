<?php

/**
 * View
 */
class View
{
  protected $html;
  protected $classes = [];

  function __construct()
  {

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

  public function __toString()
  {
    return (string) $this->html;
  }
}


?>
