<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteLinkRecords
{

  /**
   * 
   * @var InteractObject $linkTable
   * @access public
   */
  public $linkTable = null;

  /**
   * 
   * @var string $linkNamesToDelete
   * @access public
   */
  public $linkNamesToDelete = null;

  /**
   * 
   * @param InteractObject $linkTable
   * @param string $linkNamesToDelete
   * @access public
   */
  public function __construct($linkTable = null, $linkNamesToDelete = null)
  {
    $this->linkTable = $linkTable;
    $this->linkNamesToDelete = $linkNamesToDelete;
  }

}
