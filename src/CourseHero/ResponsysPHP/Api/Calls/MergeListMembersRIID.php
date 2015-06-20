<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class MergeListMembersRIID
{

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var RecordData $recordData
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
   * @param InteractObject $list
   * @param RecordData $recordData
   * @param ListMergeRule $mergeRule
   * @access public
   */
  public function __construct($list = null, $recordData = null, $mergeRule = null)
  {
    $this->list = $list;
    $this->recordData = $recordData;
    $this->mergeRule = $mergeRule;
  }

}
