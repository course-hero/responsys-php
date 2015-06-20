<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class RetrieveTableRecords
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
   * @var string $fieldList
   * @access public
   */
  public $fieldList = null;

  /**
   * 
   * @var string $idsToRetrieve
   * @access public
   */
  public $idsToRetrieve = null;

  /**
   * 
   * @param InteractObject $table
   * @param string $queryColumn
   * @param string $fieldList
   * @param string $idsToRetrieve
   * @access public
   */
  public function __construct($table = null, $queryColumn = null, $fieldList = null, $idsToRetrieve = null)
  {
    $this->table = $table;
    $this->queryColumn = $queryColumn;
    $this->fieldList = $fieldList;
    $this->idsToRetrieve = $idsToRetrieve;
  }

}
