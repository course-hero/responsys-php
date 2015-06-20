<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class OptionalData
{

  /**
   * 
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @var string $value
   * @access public
   */
  public $value = null;

  /**
   * 
   * @param string $name
   * @param string $value
   * @access public
   */
  public function __construct($name = null, $value = null)
  {
    $this->name = $name;
    $this->value = $value;
  }

}
