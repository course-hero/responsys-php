<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class MergeIntoProfileExtension
{

  /**
   * 
   * @var InteractObject $profileExtension
   * @access public
   */
  public $profileExtension = null;

  /**
   * 
   * @var RecordData $recordData
   * @access public
   */
  public $recordData = null;

  /**
   * 
   * @var QueryColumn $matchColumn
   * @access public
   */
  public $matchColumn = null;

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
   * @param InteractObject $profileExtension
   * @param RecordData $recordData
   * @param QueryColumn $matchColumn
   * @param boolean $insertOnNoMatch
   * @param UpdateOnMatch $updateOnMatch
   * @access public
   */
  public function __construct($profileExtension = null, $recordData = null, $matchColumn = null, $insertOnNoMatch = null, $updateOnMatch = null)
  {
    $this->profileExtension = $profileExtension;
    $this->recordData = $recordData;
    $this->matchColumn = $matchColumn;
    $this->insertOnNoMatch = $insertOnNoMatch;
    $this->updateOnMatch = $updateOnMatch;
  }

}
