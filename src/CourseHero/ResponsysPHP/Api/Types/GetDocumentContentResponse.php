<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetDocumentContentResponse
{

  /**
   * 
   * @var ContentResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ContentResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
