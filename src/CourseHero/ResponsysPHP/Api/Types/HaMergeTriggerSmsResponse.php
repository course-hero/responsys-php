<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class HaMergeTriggerSmsResponse
{

  /**
   * 
   * @var TriggerResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param TriggerResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
