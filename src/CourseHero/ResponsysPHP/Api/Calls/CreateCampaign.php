<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateCampaign
{

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @var CampaignType $campaignType
   * @access public
   */
  public $campaignType = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param CampaignType $campaignType
   * @access public
   */
  public function __construct($campaign = null, $campaignType = null)
  {
    $this->campaign = $campaign;
    $this->campaignType = $campaignType;
  }

}
