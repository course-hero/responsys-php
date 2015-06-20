<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RunJobResult
{

  /**
   * 
   * @var boolean $success
   * @access public
   */
  public $success = null;

  /**
   * 
   * @var string $errorMessage
   * @access public
   */
  public $errorMessage = null;

  /**
   * 
   * @var int $jobRunId
   * @access public
   */
  public $jobRunId = null;

  /**
   * 
   * @param boolean $success
   * @param string $errorMessage
   * @param int $jobRunId
   * @access public
   */
  public function __construct($success = null, $errorMessage = null, $jobRunId = null)
  {
    $this->success = $success;
    $this->errorMessage = $errorMessage;
    $this->jobRunId = $jobRunId;
  }

}
