<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class AuthenticateServerResponse
{

  /**
   * 
   * @var ServerAuthResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ServerAuthResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
