<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class LaunchResult
{

  /**
   * 
   * @var int $launchId
   * @access public
   */
  public $launchId = null;

  /**
   * 
   * @param int $launchId
   * @access public
   */
  public function __construct($launchId = null)
  {
    $this->launchId = $launchId;
  }

}
