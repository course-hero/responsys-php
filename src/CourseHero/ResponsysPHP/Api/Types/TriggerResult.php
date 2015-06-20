<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class TriggerResult
{

  /**
   * 
   * @var int $recipientId
   * @access public
   */
  public $recipientId = null;

  /**
   * 
   * @var boolean $success
   * @access public
   */
  public $success = null;

  /**
   * 
   * @var string $errorMessage
   * @access public
   */
  public $errorMessage = null;

  /**
   * 
   * @param int $recipientId
   * @param boolean $success
   * @param string $errorMessage
   * @access public
   */
  public function __construct($recipientId = null, $success = null, $errorMessage = null)
  {
    $this->recipientId = $recipientId;
    $this->success = $success;
    $this->errorMessage = $errorMessage;
  }

}
