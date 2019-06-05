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

  public function setFontToHeadline()
  {
    $this->font = 'headline';
    return $this;
  }

  public function setFontToSubHeadline()
  {
    $this->font = 'subheadline';
    return $this;
  }

  public function setFontToTitle()
  {
    $this->font = 'title';
    return $this;
  }

  public function setFontToSubTitle()
  {
    $this->font = 'subtitle';
    return $this;
  }

  public function setFontToBody()
  {
    $this->font = 'body';
    return $this;
  }

  public function setFontToLabel()
  {
    $this->font = 'label';
    return $this;
  }

  public function __toString()
  {
    switch ($this->font) {
      case 'headline':
        $view = self::setTag('h1')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'headline')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      case 'subheadline':
        $view = self::setTag('h2')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'subheadline')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      case 'title':
        $view = self::setTag('h3')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'title')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      case 'subtitle':
        $view = self::setTag('h4')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'subtitle')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      case 'body':
        $view = self::setTag('p')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'body')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      case 'label':
        $view = self::setTag('label')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'label')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      default:
        $view = self::setTag('p')
        ->setAttribute('class', 'text')
        ->setAttribute('class', 'body')
        ->setContent($this->text);
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;
    }
  }
}


?>
