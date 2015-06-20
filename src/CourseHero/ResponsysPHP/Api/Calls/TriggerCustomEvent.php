<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class TriggerCustomEvent
{

  /**
   * 
   * @var CustomEvent $customEvent
   * @access public
   */
  public $customEvent = null;

  /**
   * 
   * @var RecipientData $recipientData
   * @access public
   */
  public $recipientData = null;

  /**
   * 
   * @param CustomEvent $customEvent
   * @param RecipientData $recipientData
   * @access public
   */
  public function __construct($customEvent = null, $recipientData = null)
  {
    $this->customEvent = $customEvent;
    $this->recipientData = $recipientData;
  }

}
