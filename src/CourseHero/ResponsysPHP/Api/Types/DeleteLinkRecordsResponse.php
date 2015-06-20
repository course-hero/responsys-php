<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class DeleteLinkRecordsResponse
{

  /**
   * 
   * @var DeleteResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param DeleteResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
