<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class LaunchPreferences
{

  /**
   * 
   * @var boolean $enableLimit
   * @access public
   */
  public $enableLimit = null;

  /**
   * 
   * @var int $recipientLimit
   * @access public
   */
  public $recipientLimit = null;

  /**
   * 
   * @var boolean $enableNthSampling
   * @access public
   */
  public $enableNthSampling = null;

  /**
   * 
   * @var int $samplingNthSelection
   * @access public
   */
  public $samplingNthSelection = null;

  /**
   * 
   * @var int $samplingNthInterval
   * @access public
   */
  public $samplingNthInterval = null;

  /**
   * 
   * @var int $samplingNthOffset
   * @access public
   */
  public $samplingNthOffset = null;

  /**
   * 
   * @var boolean $enableProgressAlerts
   * @access public
   */
  public $enableProgressAlerts = null;

  /**
   * 
   * @var string $progressEmailAddresses
   * @access public
   */
  public $progressEmailAddresses = null;

  /**
   * 
   * @var ProgressChunk $progressChunk
   * @access public
   */
  public $progressChunk = null;

  /**
   * 
   * @param boolean $enableLimit
   * @param int $recipientLimit
   * @param boolean $enableNthSampling
   * @param int $samplingNthSelection
   * @param int $samplingNthInterval
   * @param int $samplingNthOffset
   * @param boolean $enableProgressAlerts
   * @param string $progressEmailAddresses
   * @param ProgressChunk $progressChunk
   * @access public
   */
  public function __construct($enableLimit = null, $recipientLimit = null, $enableNthSampling = null, $samplingNthSelection = null, $samplingNthInterval = null, $samplingNthOffset = null, $enableProgressAlerts = null, $progressEmailAddresses = null, $progressChunk = null)
  {
    $this->enableLimit = $enableLimit;
    $this->recipientLimit = $recipientLimit;
    $this->enableNthSampling = $enableNthSampling;
    $this->samplingNthSelection = $samplingNthSelection;
    $this->samplingNthInterval = $samplingNthInterval;
    $this->samplingNthOffset = $samplingNthOffset;
    $this->enableProgressAlerts = $enableProgressAlerts;
    $this->progressEmailAddresses = $progressEmailAddresses;
    $this->progressChunk = $progressChunk;
  }

}
