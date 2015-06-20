<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class RecipientResult
{

  /**
   * 
   * @var int $recipientId
   * @access public
   */
  public $recipientId = null;

  /**
   * 
   * @var string $errorMessage
   * @access public
   */
  public $errorMessage = null;

  /**
   * 
   * @param int $recipientId
   * @param string $errorMessage
   * @access public
   */
  public function __construct($recipientId = null, $errorMessage = null)
  {
    $this->recipientId = $recipientId;
    $this->errorMessage = $errorMessage;
  }

}
