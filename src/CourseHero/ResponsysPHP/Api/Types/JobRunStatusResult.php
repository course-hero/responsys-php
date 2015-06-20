<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class JobRunStatusResult
{

  /**
   * 
   * @var JobRunStatus $jobRunStatus
   * @access public
   */
  public $jobRunStatus = null;

  /**
   * 
   * @var string $errorMessage
   * @access public
   */
  public $errorMessage = null;

  /**
   * 
   * @var int $recordsProcessed
   * @access public
   */
  public $recordsProcessed = null;

  /**
   * 
   * @var int $recordsAdded
   * @access public
   */
  public $recordsAdded = null;

  /**
   * 
   * @var int $recordsRejected
   * @access public
   */
  public $recordsRejected = null;

  /**
   * 
   * @var int $recordsUpdated
   * @access public
   */
  public $recordsUpdated = null;

  /**
   * 
   * @var int $durationInSeconds
   * @access public
   */
  public $durationInSeconds = null;

  /**
   * 
   * @param JobRunStatus $jobRunStatus
   * @param string $errorMessage
   * @param int $recordsProcessed
   * @param int $recordsAdded
   * @param int $recordsRejected
   * @param int $recordsUpdated
   * @param int $durationInSeconds
   * @access public
   */
  public function __construct($jobRunStatus = null, $errorMessage = null, $recordsProcessed = null, $recordsAdded = null, $recordsRejected = null, $recordsUpdated = null, $durationInSeconds = null)
  {
    $this->jobRunStatus = $jobRunStatus;
    $this->errorMessage = $errorMessage;
    $this->recordsProcessed = $recordsProcessed;
    $this->recordsAdded = $recordsAdded;
    $this->recordsRejected = $recordsRejected;
    $this->recordsUpdated = $recordsUpdated;
    $this->durationInSeconds = $durationInSeconds;
  }

}
