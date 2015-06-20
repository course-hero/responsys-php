<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class RetrieveLinkRecords
{

  /**
   * 
   * @var InteractObject $linkTable
   * @access public
   */
  public $linkTable = null;

  /**
   * 
   * @param InteractObject $linkTable
   * @access public
   */
  public function __construct($linkTable = null)
  {
    $this->linkTable = $linkTable;
  }

}
