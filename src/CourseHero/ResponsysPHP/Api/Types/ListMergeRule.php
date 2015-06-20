<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ListMergeRule
{

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
   * @var string $matchColumnName1
   * @access public
   */
  public $matchColumnName1 = null;

  /**
   * 
   * @var string $matchColumnName2
   * @access public
   */
  public $matchColumnName2 = null;

  /**
   * 
   * @var string $matchColumnName3
   * @access public
   */
  public $matchColumnName3 = null;

  /**
   * 
   * @var MatchOperator $matchOperator
   * @access public
   */
  public $matchOperator = null;

  /**
   * 
   * @var string $optinValue
   * @access public
   */
  public $optinValue = null;

  /**
   * 
   * @var string $optoutValue
   * @access public
   */
  public $optoutValue = null;

  /**
   * 
   * @var string $htmlValue
   * @access public
   */
  public $htmlValue = null;

  /**
   * 
   * @var string $textValue
   * @access public
   */
  public $textValue = null;

  /**
   * 
   * @var string $rejectRecordIfChannelEmpty
   * @access public
   */
  public $rejectRecordIfChannelEmpty = null;

  /**
   * 
   * @var PermissionStatus $defaultPermissionStatus
   * @access public
   */
  public $defaultPermissionStatus = null;

  /**
   * 
   * @param boolean $insertOnNoMatch
   * @param UpdateOnMatch $updateOnMatch
   * @param string $matchColumnName1
   * @param string $matchColumnName2
   * @param string $matchColumnName3
   * @param MatchOperator $matchOperator
   * @param string $optinValue
   * @param string $optoutValue
   * @param string $htmlValue
   * @param string $textValue
   * @param string $rejectRecordIfChannelEmpty
   * @param PermissionStatus $defaultPermissionStatus
   * @access public
   */
  public function __construct($insertOnNoMatch = null, $updateOnMatch = null, $matchColumnName1 = null, $matchColumnName2 = null, $matchColumnName3 = null, $matchOperator = null, $optinValue = null, $optoutValue = null, $htmlValue = null, $textValue = null, $rejectRecordIfChannelEmpty = null, $defaultPermissionStatus = null)
  {
    $this->insertOnNoMatch = $insertOnNoMatch;
    $this->updateOnMatch = $updateOnMatch;
    $this->matchColumnName1 = $matchColumnName1;
    $this->matchColumnName2 = $matchColumnName2;
    $this->matchColumnName3 = $matchColumnName3;
    $this->matchOperator = $matchOperator;
    $this->optinValue = $optinValue;
    $this->optoutValue = $optoutValue;
    $this->htmlValue = $htmlValue;
    $this->textValue = $textValue;
    $this->rejectRecordIfChannelEmpty = $rejectRecordIfChannelEmpty;
    $this->defaultPermissionStatus = $defaultPermissionStatus;
  }

}
