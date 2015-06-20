<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetServerTimestampResponse
{

  /**
   * 
   * @var dateTime $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param dateTime $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
