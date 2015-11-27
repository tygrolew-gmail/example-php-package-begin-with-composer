<?php
namespace TygrolewGmail\Page\Item;

class DomHeaderCreator implements IHeaderCreator
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
    $header = $this->createHeader();
    return $header;
  }

  protected function createHeader()
  {
    $dom  = new \DOMDocument();
    $frag = $dom->createDocumentFragment();
    $div  = $dom->createElement('div');
    $text = $dom->createTextNode( $this->title );
    $attr = $dom->createAttribute('class');
    $attr->value = "header";
    $div->appendChild($text);
    $div->appendChild($attr);
    $frag->appendChild($div);
    $frag->appendXML('<hr/>');
    $dom->appendChild($frag);

    return $dom->saveHTML();
  }

}
