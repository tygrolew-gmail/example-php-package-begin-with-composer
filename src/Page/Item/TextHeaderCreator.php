<?php
namespace TygrolewGmail\Page\Item;

class TextHeaderCreator implements IHeaderCreator
{
  private $title;

  public function __construct($title = null)
  {
    if ($title !== null) {
      $this->title = $title;
    }
    else {
      $this->title = "Domyślny tytuł";
    }
  }

  public function getHeader()
  {
    $header = "<div>" . $this->title . "</div>\n<hr/>\n";
    return $header;
  }

}
