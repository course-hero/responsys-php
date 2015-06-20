<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DescribeObjects
{

  /**
   * 
   * @var InteractObject $objects
   * @access public
   */
  public $objects = null;

  /**
   * 
   * @param InteractObject $objects
   * @access public
   */
  public function __construct($objects = null)
  {
    $this->objects = $objects;
  }

}
