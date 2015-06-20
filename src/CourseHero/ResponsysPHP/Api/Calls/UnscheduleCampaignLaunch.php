<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class UnscheduleCampaignLaunch
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
   * @var dateTime $scheduleDate
   * @access public
   */
  public $scheduleDate = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param int $campaignId
   * @param dateTime $scheduleDate
   * @access public
   */
  public function __construct($campaign = null, $campaignId = null, $scheduleDate = null)
  {
    $this->campaign = $campaign;
    $this->campaignId = $campaignId;
    $this->scheduleDate = $scheduleDate;
  }

}
