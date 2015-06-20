<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class MergeLinkRecords
{

  /**
   * 
   * @var InteractObject $linkTable
   * @access public
   */
  public $linkTable = null;

  /**
   * 
   * @var RecordData $recordData
   * @access public
   */
  public $recordData = null;

  /**
   * 
   * @param InteractObject $linkTable
   * @param RecordData $recordData
   * @access public
   */
  public function __construct($linkTable = null, $recordData = null)
  {
    $this->linkTable = $linkTable;
    $this->recordData = $recordData;
  }

}
