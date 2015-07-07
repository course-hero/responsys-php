<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RecipientData
{

  /**
   * 
   * @var Recipient $recipient
   * @access public
   */
  public $recipient = null;

  /**
   * 
   * @var OptionalData $optionalData
   * @access public
   */
  public $optionalData = null;

  /**
   * 
   * @param Recipient $recipient
   * @param OptionalData $optionalData
   * @access public
   */
  public function __construct($recipient = null, $optionalData = null)
  {
    $this->recipient = $recipient;
    $this->optionalData = $optionalData;
  }
}
