<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateDocument
{

  /**
   * 
   * @var InteractObject $document
   * @access public
   */
  public $document = null;

  /**
   * 
   * @var string $content
   * @access public
   */
  public $content = null;

  /**
   * 
   * @var CharacterEncoding $characterEncoding
   * @access public
   */
  public $characterEncoding = null;

  /**
   * 
   * @param InteractObject $document
   * @param string $content
   * @param CharacterEncoding $characterEncoding
   * @access public
   */
  public function __construct($document = null, $content = null, $characterEncoding = null)
  {
    $this->document = $document;
    $this->content = $content;
    $this->characterEncoding = $characterEncoding;
  }

}
