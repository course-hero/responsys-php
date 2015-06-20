<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetJobRunLog
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
