<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class FolderResult
{

  /**
   * 
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @param string $name
   * @access public
   */
  public function __construct($name = null)
  {
    $this->name = $name;
  }

}
