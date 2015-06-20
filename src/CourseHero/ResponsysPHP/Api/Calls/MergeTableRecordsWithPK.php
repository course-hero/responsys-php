<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class MergeTableRecordsWithPK
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
   * @var boolean $insertOnNoMatch
   * @access public
   */
  public $insertOnNoMatch = null;

  /**
   * 
   * @var UpdateOnMatch $updateOnMatch
   * @access public
   */
  public $updateOnMatch = null;

  /**
   * 
   * @param InteractObject $table
   * @param RecordData $recordData
   * @param boolean $insertOnNoMatch
   * @param UpdateOnMatch $updateOnMatch
   * @access public
   */
  public function __construct($table = null, $recordData = null, $insertOnNoMatch = null, $updateOnMatch = null)
  {
    $this->table = $table;
    $this->recordData = $recordData;
    $this->insertOnNoMatch = $insertOnNoMatch;
    $this->updateOnMatch = $updateOnMatch;
  }

}
