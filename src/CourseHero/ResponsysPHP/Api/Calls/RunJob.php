<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class RunJob
{

  /**
   * 
   * @var int $jobId
   * @access public
   */
  public $jobId = null;

  /**
   * 
   * @param int $jobId
   * @access public
   */
  public function __construct($jobId = null)
  {
    $this->jobId = $jobId;
  }

}
