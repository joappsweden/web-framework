<?php

/**
 * View
 */
class View
{
  private $tag;
  private $attribute;
  private $content;

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

  public function __toString()
  {
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

    $html .= "</".$tag.">";

    return (string) $html;
  }
}


?>
