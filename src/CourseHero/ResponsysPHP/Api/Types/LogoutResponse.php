<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class LogoutResponse
{

  /**
   * 
   * @var boolean $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param boolean $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
