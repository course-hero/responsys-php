<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class MergeResult
{

  /**
   * 
   * @var int $insertCount
   * @access public
   */
  public $insertCount = null;

  /**
   * 
   * @var int $updateCount
   * @access public
   */
  public $updateCount = null;

  /**
   * 
   * @var int $rejectedCount
   * @access public
   */
  public $rejectedCount = null;

  /**
   * 
   * @var int $totalCount
   * @access public
   */
  public $totalCount = null;

  /**
   * 
   * @var string $errorMessage
   * @access public
   */
  public $errorMessage = null;

  /**
   * 
   * @param int $insertCount
   * @param int $updateCount
   * @param int $rejectedCount
   * @param int $totalCount
   * @param string $errorMessage
   * @access public
   */
  public function __construct($insertCount = null, $updateCount = null, $rejectedCount = null, $totalCount = null, $errorMessage = null)
  {
    $this->insertCount = $insertCount;
    $this->updateCount = $updateCount;
    $this->rejectedCount = $rejectedCount;
    $this->totalCount = $totalCount;
    $this->errorMessage = $errorMessage;
  }

}
