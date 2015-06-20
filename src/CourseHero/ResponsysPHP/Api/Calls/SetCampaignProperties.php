<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class SetCampaignProperties
{

  /**
   * 
   * @var CampaignProperties $campaignProperties
   * @access public
   */
  public $campaignProperties = null;

  /**
   * 
   * @param CampaignProperties $campaignProperties
   * @access public
   */
  public function __construct($campaignProperties = null)
  {
    $this->campaignProperties = $campaignProperties;
  }

}
