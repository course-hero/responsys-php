<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetLaunchesForCampaign
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
   * @var dateTime $fromDate
   * @access public
   */
  public $fromDate = null;

  /**
   * 
   * @var dateTime $toDate
   * @access public
   */
  public $toDate = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param int $campaignId
   * @param dateTime $fromDate
   * @param dateTime $toDate
   * @access public
   */
  public function __construct($campaign = null, $campaignId = null, $fromDate = null, $toDate = null)
  {
    $this->campaign = $campaign;
    $this->campaignId = $campaignId;
    $this->fromDate = $fromDate;
    $this->toDate = $toDate;
  }

}
