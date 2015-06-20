<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class LoginResult
{

  /**
   * 
   * @var string $sessionId
   * @access public
   */
  public $sessionId = null;

  /**
   * 
   * @param string $sessionId
   * @access public
   */
  public function __construct($sessionId = null)
  {
    $this->sessionId = $sessionId;
  }

}
