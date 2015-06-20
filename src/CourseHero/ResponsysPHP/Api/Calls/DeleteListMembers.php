<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteListMembers
{

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var QueryColumn $queryColumn
   * @access public
   */
  public $queryColumn = null;

  /**
   * 
   * @var string $idsToDelete
   * @access public
   */
  public $idsToDelete = null;

  /**
   * 
   * @param InteractObject $list
   * @param QueryColumn $queryColumn
   * @param string $idsToDelete
   * @access public
   */
  public function __construct($list = null, $queryColumn = null, $idsToDelete = null)
  {
    $this->list = $list;
    $this->queryColumn = $queryColumn;
    $this->idsToDelete = $idsToDelete;
  }

}
