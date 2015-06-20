<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class TruncateTable
{

  /**
   * 
   * @var InteractObject $table
   * @access public
   */
  public $table = null;

  /**
   * 
   * @param InteractObject $table
   * @access public
   */
  public function __construct($table = null)
  {
    $this->table = $table;
  }

}
