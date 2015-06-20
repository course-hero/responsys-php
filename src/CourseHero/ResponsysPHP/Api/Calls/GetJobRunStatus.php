<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetJobRunStatus
{

  /**
   * 
   * @var int $jobRunId
   * @access public
   */
  public $jobRunId = null;

  /**
   * 
   * @param int $jobRunId
   * @access public
   */
  public function __construct($jobRunId = null)
  {
    $this->jobRunId = $jobRunId;
  }

}
