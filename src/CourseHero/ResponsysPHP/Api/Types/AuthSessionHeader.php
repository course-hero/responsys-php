<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class AuthSessionHeader
{

  /**
   * 
   * @var string $authSessionId
   * @access public
   */
  public $authSessionId = null;

  /**
   * 
   * @param string $authSessionId
   * @access public
   */
  public function __construct($authSessionId = null)
  {
    $this->authSessionId = $authSessionId;
  }

}
