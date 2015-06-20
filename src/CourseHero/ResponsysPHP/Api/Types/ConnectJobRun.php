<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ConnectJobRun
{

  /**
   * 
   * @var int $jobRunId
   * @access public
   */
  public $jobRunId = null;

  /**
   * 
   * @var string $jobName
   * @access public
   */
  public $jobName = null;

  /**
   * 
   * @var dateTime $jobStartTime
   * @access public
   */
  public $jobStartTime = null;

  /**
   * 
   * @var int $durationInSeconds
   * @access public
   */
  public $durationInSeconds = null;

  /**
   * 
   * @var JobRunStatus $jobRunStatus
   * @access public
   */
  public $jobRunStatus = null;

  /**
   * 
   * @param int $jobRunId
   * @param string $jobName
   * @param dateTime $jobStartTime
   * @param int $durationInSeconds
   * @param JobRunStatus $jobRunStatus
   * @access public
   */
  public function __construct($jobRunId = null, $jobName = null, $jobStartTime = null, $durationInSeconds = null, $jobRunStatus = null)
  {
    $this->jobRunId = $jobRunId;
    $this->jobName = $jobName;
    $this->jobStartTime = $jobStartTime;
    $this->durationInSeconds = $durationInSeconds;
    $this->jobRunStatus = $jobRunStatus;
  }

}
