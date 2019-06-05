<?php

namespace UI\Element;

/**
 * InputView
 */
class InputView extends View
{
  private $placeholder;
  private $type;
  private $name;
  private $id;

  function __construct($placeholder)
  {
    $this->placeholder = $placeholder;
  }

  public static function setPlaceholder($placeholder)
  {
    return new self($placeholder);
  }

  public function setTypeToText()
  {
    $this->type = 'text';
    return $this;
  }

  public function setTypeToPassword()
  {
    $this->type = 'password';
    return $this;
  }

  public function setTypeToFile()
  {
    $this->type = 'file';
    return $this;
  }

  public function setTypeToCheckbox()
  {
    $this->type = 'checkbox';
    return $this;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function __toString()
  {
    switch ($this->type) {
      case 'text':
        $view = self::setTag('textarea')
        ->setAttribute('class', 'input')
        ->setAttribute('name', $this->name)
        ->setAttribute('id', $this->id)
        ->setAttribute('placeholder', $this->placeholder)
        ->setContent('');
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;
        break;

      case 'password':
        $view = self::setTag('input')
        ->setAttribute('class', 'input')
        ->setAttribute('type', 'password')
        ->setAttribute('name', $this->name)
        ->setAttribute('id', $this->id)
        ->setAttribute('placeholder', $this->placeholder)
        ->setContent('');
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;

      case 'file':
        $view = self::setTag('input')
        ->setAttribute('class', 'input')
        ->setAttribute('type', 'file')
        ->setAttribute('name', $this->name)
        ->setAttribute('id', $this->id)
        ->setAttribute('placeholder', $this->placeholder)
        ->setContent('');
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;

      case 'checkbox':
        $view = self::setTag('input')
        ->setAttribute('class', 'input')
        ->setAttribute('type', 'checkbox')
        ->setAttribute('name', $this->name)
        ->setAttribute('id', $this->id)
        ->setAttribute('placeholder', $this->placeholder)
        ->setContent('');
        foreach ($this->getAttribute() as $key => $value) {
          foreach ($value as $attribute) {
            $view->setAttribute($key, $attribute);
          }
        }
        return (string) $view;

      default:
        $view = self::setTag('input')
        ->setAttribute('class', 'input')
        ->setAttribute('type', 'text')
        ->setAttribute('name', $this->name)
        ->setAttribute('id', $this->id)
        ->setAttribute('placeholder', $this->placeholder)
        ->setContent('');
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
