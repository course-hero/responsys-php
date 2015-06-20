<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetCampaignId
{

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @param InteractObject $campaign
   * @access public
   */
  public function __construct($campaign = null)
  {
    $this->campaign = $campaign;
  }

}
