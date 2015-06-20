<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class LoginWithCertificate
{

  /**
   * 
   * @var int $encryptedServerChallenge
   * @access public
   */
  public $encryptedServerChallenge = null;

  /**
   * 
   * @param int $encryptedServerChallenge
   * @access public
   */
  public function __construct($encryptedServerChallenge = null)
  {
    $this->encryptedServerChallenge = $encryptedServerChallenge;
  }

}
