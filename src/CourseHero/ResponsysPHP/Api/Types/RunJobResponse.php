<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RunJobResponse
{

  /**
   * 
   * @var RunJobResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param RunJobResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
