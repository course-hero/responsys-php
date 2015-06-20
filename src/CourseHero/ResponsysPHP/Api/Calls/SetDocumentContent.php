<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class SetDocumentContent
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
   * @param InteractObject $document
   * @param string $content
   * @access public
   */
  public function __construct($document = null, $content = null)
  {
    $this->document = $document;
    $this->content = $content;
  }

}
