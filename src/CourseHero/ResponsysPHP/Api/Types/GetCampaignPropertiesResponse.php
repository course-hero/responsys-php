<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetCampaignPropertiesResponse
{

  /**
   * 
   * @var CampaignProperties $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param CampaignProperties $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
