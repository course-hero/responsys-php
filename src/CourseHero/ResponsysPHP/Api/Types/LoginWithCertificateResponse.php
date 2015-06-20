<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class loginWithCertificateResponse
{

  /**
   * 
   * @var LoginResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param LoginResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
