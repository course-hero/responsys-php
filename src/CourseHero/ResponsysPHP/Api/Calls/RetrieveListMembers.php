<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class RetrieveListMembers
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
   * @param InteractObject $list
   * @param QueryColumn $queryColumn
   * @param string $fieldList
   * @param string $idsToRetrieve
   * @access public
   */
  public function __construct($list = null, $queryColumn = null, $fieldList = null, $idsToRetrieve = null)
  {
    $this->list = $list;
    $this->queryColumn = $queryColumn;
    $this->fieldList = $fieldList;
    $this->idsToRetrieve = $idsToRetrieve;
  }

}
