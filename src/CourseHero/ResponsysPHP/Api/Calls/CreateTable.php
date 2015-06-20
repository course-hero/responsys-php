<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateTable
{

  /**
   * 
   * @var InteractObject $table
   * @access public
   */
  public $table = null;

  /**
   * 
   * @var Field $fields
   * @access public
   */
  public $fields = null;

  /**
   * 
   * @param InteractObject $table
   * @param Field $fields
   * @access public
   */
  public function __construct($table = null, $fields = null)
  {
    $this->table = $table;
    $this->fields = $fields;
  }

}
