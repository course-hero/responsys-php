<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteDocument
{

  /**
   * 
   * @var InteractObject $document
   * @access public
   */
  public $document = null;

  /**
   * 
   * @param InteractObject $document
   * @access public
   */
  public function __construct($document = null)
  {
    $this->document = $document;
  }

}
