<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class Login
{

  /**
   * 
   * @var string $username
   * @access public
   */
  public $username = null;

  /**
   * 
   * @var string $password
   * @access public
   */
  public $password = null;

  /**
   * 
   * @param string $username
   * @param string $password
   * @access public
   */
  public function __construct($username = null, $password = null)
  {
    $this->username = $username;
    $this->password = $password;
  }

}
