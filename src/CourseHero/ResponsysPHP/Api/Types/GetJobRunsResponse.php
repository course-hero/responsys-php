<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetJobRunsResponse
{

  /**
   * 
   * @var ConnectJobRun $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ConnectJobRun $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
