<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetJobRunStatusResponse
{

  /**
   * 
   * @var JobRunStatusResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param JobRunStatusResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
