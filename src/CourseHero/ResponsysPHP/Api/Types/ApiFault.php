<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ApiFault
{

  /**
   * 
   * @var ExceptionCode $exceptionCode
   * @access public
   */
  public $exceptionCode = null;

  /**
   * 
   * @var string $exceptionMessage
   * @access public
   */
  public $exceptionMessage = null;

  /**
   * 
   * @param ExceptionCode $exceptionCode
   * @param string $exceptionMessage
   * @access public
   */
  public function __construct($exceptionCode = null, $exceptionMessage = null)
  {
    $this->exceptionCode = $exceptionCode;
    $this->exceptionMessage = $exceptionMessage;
  }

}
