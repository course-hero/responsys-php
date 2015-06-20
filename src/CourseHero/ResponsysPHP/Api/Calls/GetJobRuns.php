<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetJobRuns
{

  /**
   * 
   * @var int $jobId
   * @access public
   */
  public $jobId = null;

  /**
   * 
   * @var dateTime $startDate
   * @access public
   */
  public $startDate = null;

  /**
   * 
   * @var dateTime $endDate
   * @access public
   */
  public $endDate = null;

  /**
   * 
   * @param int $jobId
   * @param dateTime $startDate
   * @param dateTime $endDate
   * @access public
   */
  public function __construct($jobId = null, $startDate = null, $endDate = null)
  {
    $this->jobId = $jobId;
    $this->startDate = $startDate;
    $this->endDate = $endDate;
  }

}
