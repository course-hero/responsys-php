<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class MergeTableRecordsResponse
{

  /**
   * 
   * @var MergeResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param MergeResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
