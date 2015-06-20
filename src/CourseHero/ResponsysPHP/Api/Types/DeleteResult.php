<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class DeleteResult
{

  /**
   * 
   * @var string $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @var boolean $success
   * @access public
   */
  public $success = null;

  /**
   * 
   * @var ExceptionCode $exceptionCode
   * @access public
   */
  public $exceptionCode = null;

  /**
   * 
   * @var string $errorMessage
   * @access public
   */
  public $errorMessage = null;

  /**
   * 
   * @param string $id
   * @param boolean $success
   * @param ExceptionCode $exceptionCode
   * @param string $errorMessage
   * @access public
   */
  public function __construct($id = null, $success = null, $exceptionCode = null, $errorMessage = null)
  {
    $this->id = $id;
    $this->success = $success;
    $this->exceptionCode = $exceptionCode;
    $this->errorMessage = $errorMessage;
  }

}
