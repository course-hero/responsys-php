<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class DescribeObjectResult
{

  /**
   * 
   * @var string $createdBy
   * @access public
   */
  public $createdBy = null;

  /**
   * 
   * @var dateTime $createdDate
   * @access public
   */
  public $createdDate = null;

  /**
   * 
   * @var string $lastModifiedBy
   * @access public
   */
  public $lastModifiedBy = null;

  /**
   * 
   * @var dateTime $lastModifiedDate
   * @access public
   */
  public $lastModifiedDate = null;

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
   * @var Field $fields
   * @access public
   */
  public $fields = null;

  /**
   * 
   * @var FolderObjectType $objectType
   * @access public
   */
  public $objectType = null;

  /**
   * 
   * @var string $any
   * @access public
   */
  public $any = null;

  /**
   * 
   * @param string $createdBy
   * @param dateTime $createdDate
   * @param string $lastModifiedBy
   * @param dateTime $lastModifiedDate
   * @param ExceptionCode $exceptionCode
   * @param string $errorMessage
   * @param Field $fields
   * @param FolderObjectType $objectType
   * @param string $any
   * @access public
   */
  public function __construct($createdBy = null, $createdDate = null, $lastModifiedBy = null, $lastModifiedDate = null, $exceptionCode = null, $errorMessage = null, $fields = null, $objectType = null, $any = null)
  {
    $this->createdBy = $createdBy;
    $this->createdDate = $createdDate;
    $this->lastModifiedBy = $lastModifiedBy;
    $this->lastModifiedDate = $lastModifiedDate;
    $this->exceptionCode = $exceptionCode;
    $this->errorMessage = $errorMessage;
    $this->fields = $fields;
    $this->objectType = $objectType;
    $this->any = $any;
  }

}
