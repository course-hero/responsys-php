<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ServerAuthResult
{

  /**
   * 
   * @var string $authSessionId
   * @access public
   */
  public $authSessionId = null;

  /**
   * 
   * @var int $encryptedClientChallenge
   * @access public
   */
  public $encryptedClientChallenge = null;

  /**
   * 
   * @var int $serverChallenge
   * @access public
   */
  public $serverChallenge = null;

  /**
   * 
   * @param string $authSessionId
   * @param int $encryptedClientChallenge
   * @param int $serverChallenge
   * @access public
   */
  public function __construct($authSessionId = null, $encryptedClientChallenge = null, $serverChallenge = null)
  {
    $this->authSessionId = $authSessionId;
    $this->encryptedClientChallenge = $encryptedClientChallenge;
    $this->serverChallenge = $serverChallenge;
  }

}
