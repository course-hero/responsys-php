<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class TriggerData
{

  /**
   * 
   * @var OptionalData $optionalData
   * @access public
   */
  public $optionalData = null;

  /**
   * 
   * @param OptionalData $optionalData
   * @access public
   */
  public function __construct($optionalData = null)
  {
    $this->optionalData = $optionalData;
  }

}
