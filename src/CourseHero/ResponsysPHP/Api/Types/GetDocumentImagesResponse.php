<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetDocumentImagesResponse
{

  /**
   * 
   * @var ImageData $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ImageData $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
