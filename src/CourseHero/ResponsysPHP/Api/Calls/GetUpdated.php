<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetUpdated
{

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var dateTime $startTime
   * @access public
   */
  public $startTime = null;

  /**
   * 
   * @var dateTime $endTime
   * @access public
   */
  public $endTime = null;

  /**
   * 
   * @param InteractObject $list
   * @param dateTime $startTime
   * @param dateTime $endTime
   * @access public
   */
  public function __construct($list = null, $startTime = null, $endTime = null)
  {
    $this->list = $list;
    $this->startTime = $startTime;
    $this->endTime = $endTime;
  }

}
