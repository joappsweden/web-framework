<?php

/**
 * MainView
 */
class MainView extends View
{
  private $title;
  private $author;
  private $description;
  private $keywords;
  private $style = [];
  private $script = [];

  function __construct($title)
  {
    $this->title = $title;
  }

  public static function setTitle($title)
  {
    return new self($title);
  }

  public function setAuthor($author)
  {
    $this->author = $author;
    return $this;
  }

  public function setDescription($description)
  {
    $this->description = $description;
    return $this;
  }

  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
    return $this;
  }

  public function setStyle($style)
  {
    $this->style[] = $style;
    return $this;
  }

  public function setScript($script)
  {
    $this->script[] = $script;
    return $this;
  }

  public function __toString()
  {
    $html = "";
    $head = "";
    $body = "";

    $head .= self::setTag('meta')
    ->setAttribute("name", "viewport")
    ->setAttribute("content", "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no");

    $head .= self::setTag('meta')
    ->setAttribute("charset", "utf-8");

    if (isset($this->title)) {
      $head .= self::setTag('title')
      ->setContent($this->title);
    }

    if (isset($this->author)) {
      $head .= self::setTag('meta')
      ->setAttribute("name", "author")
      ->setAttribute("content", $this->author);
    }

    if (isset($this->description)) {
      $head .= self::setTag('meta')
      ->setAttribute("name", "description")
      ->setAttribute("content", $this->description);
    }

    if (isset($this->keywords)) {
      $head .= self::setTag('meta')
      ->setAttribute("name", "keywords")
      ->setAttribute("content", $this->keywords);
    }

    if (isset($this->style) && count($this->style) > 0) {
      foreach ($this->style as $style) {
        $head .= self::setTag('link')
        ->setAttribute("type", "text/css")
        ->setAttribute("rel", "stylesheet")
        ->setAttribute("href", "./public/css/".$style.".css");
      }
    }

    foreach ($this->getContent() as $content) {
      $body .= $content;
    }

    if (isset($this->script) && count($this->script) > 0) {
      foreach ($this->script as $script) {
        $body .= self::setTag('script')
        ->setAttribute("type", "text/javascript")
        ->setAttribute("src", "./public/js/".$script.".js")
        ->setContent("");
      }
    }

    $html .= self::setTag('head')
    ->setContent($head);

    $html .= self::setTag('body')
    ->setContent($body);

    return $html;
  }
}


?>
