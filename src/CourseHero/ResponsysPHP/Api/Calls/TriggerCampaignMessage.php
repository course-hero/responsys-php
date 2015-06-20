<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class TriggerCampaignMessage
{

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @var RecipientData $recipientData
   * @access public
   */
  public $recipientData = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param RecipientData $recipientData
   * @access public
   */
  public function __construct($campaign = null, $recipientData = null)
  {
    $this->campaign = $campaign;
    $this->recipientData = $recipientData;
  }

}
