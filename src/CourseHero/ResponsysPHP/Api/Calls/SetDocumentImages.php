<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class SetDocumentImages
{

  /**
   * 
   * @var InteractObject $document
   * @access public
   */
  public $document = null;

  /**
   * 
   * @var ImageData $imageData
   * @access public
   */
  public $imageData = null;

  /**
   * 
   * @param InteractObject $document
   * @param ImageData $imageData
   * @access public
   */
  public function __construct($document = null, $imageData = null)
  {
    $this->document = $document;
    $this->imageData = $imageData;
  }

}
