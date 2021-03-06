<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetOpenLaunchesResponse
{

  /**
   * 
   * @var LaunchStatusResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param LaunchStatusResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
