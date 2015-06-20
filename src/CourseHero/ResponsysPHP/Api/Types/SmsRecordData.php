<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class SmsRecordData
{

  /**
   * 
   * @var string $fieldNames
   * @access public
   */
  public $fieldNames = null;

  /**
   * 
   * @var Record $record
   * @access public
   */
  public $record = null;

  /**
   * 
   * @param string $fieldNames
   * @param Record $record
   * @access public
   */
  public function __construct($fieldNames = null, $record = null)
  {
    $this->fieldNames = $fieldNames;
    $this->record = $record;
  }

}
