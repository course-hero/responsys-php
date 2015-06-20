<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class HaMergeTriggerSms
{

  /**
   * 
   * @var SmsRecordData $recordData
   * @access public
   */
  public $recordData = null;

  /**
   * 
   * @var ListMergeRule $mergeRule
   * @access public
   */
  public $mergeRule = null;

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @var TriggerData $triggerData
   * @access public
   */
  public $triggerData = null;

  /**
   * 
   * @param SmsRecordData $recordData
   * @param ListMergeRule $mergeRule
   * @param InteractObject $campaign
   * @param TriggerData $triggerData
   * @access public
   */
  public function __construct($recordData = null, $mergeRule = null, $campaign = null, $triggerData = null)
  {
    $this->recordData = $recordData;
    $this->mergeRule = $mergeRule;
    $this->campaign = $campaign;
    $this->triggerData = $triggerData;
  }

}
