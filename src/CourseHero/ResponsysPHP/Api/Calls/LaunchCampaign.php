<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class LaunchCampaign
{

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @var ProofLaunchOptions $proofLaunchOptions
   * @access public
   */
  public $proofLaunchOptions = null;

  /**
   * 
   * @var LaunchPreferences $launchPreferences
   * @access public
   */
  public $launchPreferences = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param ProofLaunchOptions $proofLaunchOptions
   * @param LaunchPreferences $launchPreferences
   * @access public
   */
  public function __construct($campaign = null, $proofLaunchOptions = null, $launchPreferences = null)
  {
    $this->campaign = $campaign;
    $this->proofLaunchOptions = $proofLaunchOptions;
    $this->launchPreferences = $launchPreferences;
  }

}
