<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class AuthenticateServer
{

  /**
   * 
   * @var string $username
   * @access public
   */
  public $username = null;

  /**
   * 
   * @var int $clientChallenge
   * @access public
   */
  public $clientChallenge = null;

  /**
   * 
   * @param string $username
   * @param int $clientChallenge
   * @access public
   */
  public function __construct($username = null, $clientChallenge = null)
  {
    $this->username = $username;
    $this->clientChallenge = $clientChallenge;
  }

}
