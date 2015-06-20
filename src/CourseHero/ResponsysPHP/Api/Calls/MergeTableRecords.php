<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class MergeTableRecords
{

  /**
   * 
   * @var InteractObject $table
   * @access public
   */
  public $table = null;

  /**
   * 
   * @var RecordData $recordData
   * @access public
   */
  public $recordData = null;

  /**
   * 
   * @var string[] $matchColumnNames
   * @access public
   */
  public $matchColumnNames = null;

  /**
   * 
   * @param InteractObject $table
   * @param RecordData $recordData
   * @param string $matchColumnNames
   * @access public
   */
  public function __construct($table = null, $recordData = null, $matchColumnNames = null)
  {
    $this->table = $table;
    $this->recordData = $recordData;
    $this->matchColumnNames = $matchColumnNames;
  }

}
