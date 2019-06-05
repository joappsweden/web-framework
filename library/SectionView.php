<?php

/**
 * SectionView
 */
class SectionView extends View
{
  private $id = "";

  public function __construct($id)
  {
    $this->id = $id;
  }

  public static function setId($id)
  {
    return new self($id);
  }

  public function __toString()
  {
    $html = View::setTag('div')
    ->setAttribute('class', 'section')
    ->setAttribute('id', $this->id);

    foreach ($this->getContent() as $content) {
      $html->setContent($content);
    }

    return (string) $html;
  }
}


?>
