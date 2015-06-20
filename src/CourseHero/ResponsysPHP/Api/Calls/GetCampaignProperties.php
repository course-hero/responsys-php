<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetCampaignProperties
{

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @var int $campaignId
   * @access public
   */
  public $campaignId = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param int $campaignId
   * @access public
   */
  public function __construct($campaign = null, $campaignId = null)
  {
    $this->campaign = $campaign;
    $this->campaignId = $campaignId;
  }

}
