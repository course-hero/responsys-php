<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RecordData
{

  /**
   * 
   * @var string[] $fieldNames
   * @access public
   */
  public $fieldNames = null;

  /**
   * 
   * @var Record[] $records
   * @access public
   */
  public $records = null;

  /**
   * 
   * @var string $mapTemplateName
   * @access public
   */
  public $mapTemplateName = null;

  /**
   * 
   * @param string $fieldNames
   * @param Record $records
   * @param string $mapTemplateName
   * @access public
   */
  public function __construct($fieldNames = null, $records = null, $mapTemplateName = null)
  {
    $this->fieldNames = $fieldNames;
    $this->records = $records;
    $this->mapTemplateName = $mapTemplateName;
  }

}
