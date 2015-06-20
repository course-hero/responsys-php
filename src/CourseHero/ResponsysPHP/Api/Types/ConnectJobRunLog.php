<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ConnectJobRunLog
{

  /**
   * 
   * @var string $logLevel
   * @access public
   */
  public $logLevel = null;

  /**
   * 
   * @var dateTime $logTime
   * @access public
   */
  public $logTime = null;

  /**
   * 
   * @var string $logMessage
   * @access public
   */
  public $logMessage = null;

  /**
   * 
   * @param string $logLevel
   * @param dateTime $logTime
   * @param string $logMessage
   * @access public
   */
  public function __construct($logLevel = null, $logTime = null, $logMessage = null)
  {
    $this->logLevel = $logLevel;
    $this->logTime = $logTime;
    $this->logMessage = $logMessage;
  }

}
