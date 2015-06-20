<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateSQLView
{

  /**
   * 
   * @var InteractObject $sqlView
   * @access public
   */
  public $sqlView = null;

  /**
   * 
   * @var InteractObject $tables
   * @access public
   */
  public $tables = null;

  /**
   * 
   * @var string $sqlQuery
   * @access public
   */
  public $sqlQuery = null;

  /**
   * 
   * @var string $dataExtractionKey
   * @access public
   */
  public $dataExtractionKey = null;

  /**
   * 
   * @param InteractObject $sqlView
   * @param InteractObject $tables
   * @param string $sqlQuery
   * @param string $dataExtractionKey
   * @access public
   */
  public function __construct($sqlView = null, $tables = null, $sqlQuery = null, $dataExtractionKey = null)
  {
    $this->sqlView = $sqlView;
    $this->tables = $tables;
    $this->sqlQuery = $sqlQuery;
    $this->dataExtractionKey = $dataExtractionKey;
  }

}
