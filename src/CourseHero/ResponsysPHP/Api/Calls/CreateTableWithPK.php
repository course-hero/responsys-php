<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateTableWithPK
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
   * @var string $primaryKeys
   * @access public
   */
  public $primaryKeys = null;

  /**
   * 
   * @param InteractObject $table
   * @param Field $fields
   * @param string $primaryKeys
   * @access public
   */
  public function __construct($table = null, $fields = null, $primaryKeys = null)
  {
    $this->table = $table;
    $this->fields = $fields;
    $this->primaryKeys = $primaryKeys;
  }

}
