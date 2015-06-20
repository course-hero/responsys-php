<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class Field
{

  /**
   * 
   * @var string $fieldName
   * @access public
   */
  public $fieldName = null;

  /**
   * 
   * @var FieldType $fieldType
   * @access public
   */
  public $fieldType = null;

  /**
   * 
   * @var boolean $custom
   * @access public
   */
  public $custom = null;

  /**
   * 
   * @var boolean $dataExtractionKey
   * @access public
   */
  public $dataExtractionKey = null;

  /**
   * 
   * @param string $fieldName
   * @param FieldType $fieldType
   * @param boolean $custom
   * @param boolean $dataExtractionKey
   * @access public
   */
  public function __construct($fieldName = null, $fieldType = null, $custom = null, $dataExtractionKey = null)
  {
    $this->fieldName = $fieldName;
    $this->fieldType = $fieldType;
    $this->custom = $custom;
    $this->dataExtractionKey = $dataExtractionKey;
  }

}
