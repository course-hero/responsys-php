<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetUpdatedResponse
{

  /**
   * 
   * @var GetUpdatedResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param GetUpdatedResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
