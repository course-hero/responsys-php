<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

use CourseHero\ResponsysPHP\Api\Types as Types;

class MergeListMembers
{

  /**
   * 
   * @var Types\InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var Types\RecordData $recordData
   * @access public
   */
  public $recordData = null;

  /**
   * 
   * @var Types\ListMergeRule $mergeRule
   * @access public
   */
  public $mergeRule = null;

  /**
   * 
   * @param Types\InteractObject $list
   * @param Types\RecordData $recordData
   * @param Types\ListMergeRule $mergeRule
   * @access public
   */
  public function __construct($list = null, $recordData = null, $mergeRule = null)
  {
    $this->list = $list;
    $this->recordData = $recordData;
    $this->mergeRule = $mergeRule;
  }

}
