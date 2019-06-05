<?php

/**
 * View
 */
class View
{
  private $tag;
  private $attribute = [];
  private $content = [];

  function __construct($tag)
  {
    $this->tag = $tag;
  }

  public static function setTag($tag)
  {
    return new self($tag);
  }

  public function setAttribute($key, $value)
  {
    $this->attribute[$key][] = $value;
    return $this;
  }

  public function setContent($content)
  {
    $this->content[] = $content;
    return $this;
  }

  public function getAttribute()
  {
    return $this->attribute;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function __toString()
  {
    if (isset($this->tag)) {
      $tag = $this->tag;
      $attribute = "";

      if (count($this->attribute) > 0) {
        foreach ($this->attribute as $key => $value) {
          $dataString = "";

          foreach ($value as $data) {
            $dataString .= $data . " ";
          }

          $dataString = trim($dataString, " ");

          $attribute .= "$key = '$dataString' ";
        }

        $attribute = " " . trim($attribute, " ");
      }

      $html = "";

      $html .= "<".$tag.$attribute.">";

      foreach ($this->content as $content) {
        $html .= $content;
      }

      if (count($this->content) > 0) {
        $html .= "</".$tag.">";
      }

      return (string) $html;
    }

    return '';
  }

  public function setTextAlignmentToCenter()
  {
    $this->setAttribute('class', 'text-center');
    return $this;
  }

  public function setPadding()
  {
    $this->setAttribute('class', 'padding');
    return $this;
  }

  public function setPaddingOne()
  {
    $this->setAttribute('class', 'padding_one');
    return $this;
  }
}


?>
