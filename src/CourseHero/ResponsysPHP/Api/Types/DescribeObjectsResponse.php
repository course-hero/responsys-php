<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class DescribeObjectsResponse
{

  /**
   * 
   * @var DescribeObjectResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param DescribeObjectResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
