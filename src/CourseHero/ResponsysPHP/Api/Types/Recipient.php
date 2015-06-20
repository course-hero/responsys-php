<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class Recipient
{

  /**
   * 
   * @var InteractObject $listName
   * @access public
   */
  public $listName = null;

  /**
   * 
   * @var int $recipientId
   * @access public
   */
  public $recipientId = null;

  /**
   * 
   * @var string $customerId
   * @access public
   */
  public $customerId = null;

  /**
   * 
   * @var string $emailAddress
   * @access public
   */
  public $emailAddress = null;

  /**
   * 
   * @var string $mobileNumber
   * @access public
   */
  public $mobileNumber = null;

  /**
   * 
   * @var EmailFormat $emailFormat
   * @access public
   */
  public $emailFormat = null;

  /**
   * 
   * @param InteractObject $listName
   * @param int $recipientId
   * @param string $customerId
   * @param string $emailAddress
   * @param string $mobileNumber
   * @param EmailFormat $emailFormat
   * @access public
   */
  public function __construct($listName = null, $recipientId = null, $customerId = null, $emailAddress = null, $mobileNumber = null, $emailFormat = null)
  {
    $this->listName = $listName;
    $this->recipientId = $recipientId;
    $this->customerId = $customerId;
    $this->emailAddress = $emailAddress;
    $this->mobileNumber = $mobileNumber;
    $this->emailFormat = $emailFormat;
  }

}
