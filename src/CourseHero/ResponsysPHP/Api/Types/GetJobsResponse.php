<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetJobsResponse
{

  /**
   * 
   * @var ConnectJob $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ConnectJob $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
