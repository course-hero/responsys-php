<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class CreateCampaignResponse
{

  /**
   * 
   * @var int $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param int $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
