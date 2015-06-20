<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class ChangeTableSchema
{

  /**
   * 
   * @var InteractObject $table
   * @access public
   */
  public $table = null;

  /**
   * 
   * @var Field $addFields
   * @access public
   */
  public $addFields = null;

  /**
   * 
   * @var string $removeFields
   * @access public
   */
  public $removeFields = null;

  /**
   * 
   * @param InteractObject $table
   * @param Field $addFields
   * @param string $removeFields
   * @access public
   */
  public function __construct($table = null, $addFields = null, $removeFields = null)
  {
    $this->table = $table;
    $this->addFields = $addFields;
    $this->removeFields = $removeFields;
  }

}
