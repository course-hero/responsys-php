<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RetrieveResult
{

  /**
   * 
   * @var RecordData $recordData
   * @access public
   */
  public $recordData = null;

  /**
   * 
   * @param RecordData $recordData
   * @access public
   */
  public function __construct($recordData = null)
  {
    $this->recordData = $recordData;
  }

}
