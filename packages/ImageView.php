<?php

/**
 * ImageView
 */
class ImageView extends View
{
  private $src;
  private $alt;

  function __construct($src)
  {
    $this->src = $src;
  }

  public static function setSource($src)
  {
    return new self($src);
  }

  public function setAlt($alt)
  {
    $this->alt = $alt;
    return $this;
  }

  public function __toString()
  {
    $src = $this->src;
    $alt = $this->alt;
    $classString = $this->getClasses();
    $attribute = $this->getAttributes();

    $this->html = "<img class='image$classString' src='./public/images/$src' alt='$alt'$attribute>";

    return (string) $this->html;
  }
}


?>
