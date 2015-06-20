<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class Record
{

  /**
   * 
   * @var string $fieldValues
   * @access public
   */
  public $fieldValues = null;

  /**
   * 
   * @param string $fieldValues
   * @access public
   */
  public function __construct($fieldValues = null)
  {
    $this->fieldValues = $fieldValues;
  }

}
