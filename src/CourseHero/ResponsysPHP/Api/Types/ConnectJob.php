<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ConnectJob
{

  /**
   * 
   * @var int $jobId
   * @access public
   */
  public $jobId = null;

  /**
   * 
   * @var string $jobName
   * @access public
   */
  public $jobName = null;

  /**
   * 
   * @var string $jobType
   * @access public
   */
  public $jobType = null;

  /**
   * 
   * @var dateTime $nextJobRun
   * @access public
   */
  public $nextJobRun = null;

  /**
   * 
   * @var dateTime $lastJobRun
   * @access public
   */
  public $lastJobRun = null;

  /**
   * 
   * @var string $scheduleType
   * @access public
   */
  public $scheduleType = null;

  /**
   * 
   * @var boolean $active
   * @access public
   */
  public $active = null;

  /**
   * 
   * @var boolean $running
   * @access public
   */
  public $running = null;

  /**
   * 
   * @param int $jobId
   * @param string $jobName
   * @param string $jobType
   * @param dateTime $nextJobRun
   * @param dateTime $lastJobRun
   * @param string $scheduleType
   * @param boolean $active
   * @param boolean $running
   * @access public
   */
  public function __construct($jobId = null, $jobName = null, $jobType = null, $nextJobRun = null, $lastJobRun = null, $scheduleType = null, $active = null, $running = null)
  {
    $this->jobId = $jobId;
    $this->jobName = $jobName;
    $this->jobType = $jobType;
    $this->nextJobRun = $nextJobRun;
    $this->lastJobRun = $lastJobRun;
    $this->scheduleType = $scheduleType;
    $this->active = $active;
    $this->running = $running;
  }

}
