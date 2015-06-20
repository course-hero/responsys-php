<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetLaunchStatus
{

  /**
   * 
   * @var int $launchIds
   * @access public
   */
  public $launchIds = null;

  /**
   * 
   * @param int $launchIds
   * @access public
   */
  public function __construct($launchIds = null)
  {
    $this->launchIds = $launchIds;
  }

}
