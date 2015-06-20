<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class ScheduleCampaignLaunch
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
   * @var dateTime $scheduleDate
   * @access public
   */
  public $scheduleDate = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param ProofLaunchOptions $proofLaunchOptions
   * @param LaunchPreferences $launchPreferences
   * @param dateTime $scheduleDate
   * @access public
   */
  public function __construct($campaign = null, $proofLaunchOptions = null, $launchPreferences = null, $scheduleDate = null)
  {
    $this->campaign = $campaign;
    $this->proofLaunchOptions = $proofLaunchOptions;
    $this->launchPreferences = $launchPreferences;
    $this->scheduleDate = $scheduleDate;
  }

}
