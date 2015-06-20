<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetJobRunLogResponse
{

  /**
   * 
   * @var ConnectJobRunLog $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ConnectJobRunLog $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
