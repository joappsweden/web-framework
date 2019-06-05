<?php

namespace UI\Element;

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
    $view = self::setTag('img')
    ->setAttribute('class', 'image')
    ->setAttribute('src', './public/images/' . $this->src)
    ->setAttribute('alt', $this->alt);

    foreach ($this->getAttribute() as $key => $value) {
      foreach ($value as $attribute) {
        $view->setAttribute($key, $attribute);
      }
    }

    return (string) $view;
  }
}


?>
