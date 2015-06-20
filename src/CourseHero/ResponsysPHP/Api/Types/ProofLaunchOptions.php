<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ProofLaunchOptions
{

  /**
   * 
   * @var string $proofEmailAddress
   * @access public
   */
  public $proofEmailAddress = null;

  /**
   * 
   * @var ProofLaunchType $proofLaunchType
   * @access public
   */
  public $proofLaunchType = null;

  /**
   * 
   * @param string $proofEmailAddress
   * @param ProofLaunchType $proofLaunchType
   * @access public
   */
  public function __construct($proofEmailAddress = null, $proofLaunchType = null)
  {
    $this->proofEmailAddress = $proofEmailAddress;
    $this->proofLaunchType = $proofLaunchType;
  }

}
