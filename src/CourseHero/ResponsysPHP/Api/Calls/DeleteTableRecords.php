<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteTableRecords
{

  /**
   * 
   * @var InteractObject $table
   * @access public
   */
  public $table = null;

  /**
   * 
   * @var string $queryColumn
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
   * @param InteractObject $table
   * @param string $queryColumn
   * @param string $idsToDelete
   * @access public
   */
  public function __construct($table = null, $queryColumn = null, $idsToDelete = null)
  {
    $this->table = $table;
    $this->queryColumn = $queryColumn;
    $this->idsToDelete = $idsToDelete;
  }

}
