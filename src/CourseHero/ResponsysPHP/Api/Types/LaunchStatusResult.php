<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class LaunchStatusResult
{

  /**
   * 
   * @var int $launchId
   * @access public
   */
  public $launchId = null;

  /**
   * 
   * @var string $launchState
   * @access public
   */
  public $launchState = null;

  /**
   * 
   * @var string $launchType
   * @access public
   */
  public $launchType = null;

  /**
   * 
   * @var dateTime $launchDate
   * @access public
   */
  public $launchDate = null;

  /**
   * 
   * @var string $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @param int $launchId
   * @param string $launchState
   * @param string $launchType
   * @param dateTime $launchDate
   * @param string $campaign
   * @access public
   */
  public function __construct($launchId = null, $launchState = null, $launchType = null, $launchDate = null, $campaign = null)
  {
    $this->launchId = $launchId;
    $this->launchState = $launchState;
    $this->launchType = $launchType;
    $this->launchDate = $launchDate;
    $this->campaign = $campaign;
  }

}
