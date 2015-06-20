<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class RetrieveProfileExtensionRecords
{

  /**
   * 
   * @var InteractObject $profileExtension
   * @access public
   */
  public $profileExtension = null;

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
   * @param InteractObject $profileExtension
   * @param QueryColumn $queryColumn
   * @param string $fieldList
   * @param string $idsToRetrieve
   * @access public
   */
  public function __construct($profileExtension = null, $queryColumn = null, $fieldList = null, $idsToRetrieve = null)
  {
    $this->profileExtension = $profileExtension;
    $this->queryColumn = $queryColumn;
    $this->fieldList = $fieldList;
    $this->idsToRetrieve = $idsToRetrieve;
  }

}
