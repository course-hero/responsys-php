<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetUpdatedResult
{

  /**
   * 
   * @var int $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @var dateTime $latestDateCovered
   * @access public
   */
  public $latestDateCovered = null;

  /**
   * 
   * @param int $id
   * @param dateTime $latestDateCovered
   * @access public
   */
  public function __construct($id = null, $latestDateCovered = null)
  {
    $this->id = $id;
    $this->latestDateCovered = $latestDateCovered;
  }

}
