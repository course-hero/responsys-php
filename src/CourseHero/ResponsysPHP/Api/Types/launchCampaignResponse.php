<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class LaunchCampaignResponse
{

  /**
   * 
   * @var LaunchResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param LaunchResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
