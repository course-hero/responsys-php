<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class MoveContentLibraryItem
{

  /**
   * 
   * @var InteractObject $sourceObject
   * @access public
   */
  public $sourceObject = null;

  /**
   * 
   * @var InteractObject $destinationObject
   * @access public
   */
  public $destinationObject = null;

  /**
   * 
   * @param InteractObject $sourceObject
   * @param InteractObject $destinationObject
   * @access public
   */
  public function __construct($sourceObject = null, $destinationObject = null)
  {
    $this->sourceObject = $sourceObject;
    $this->destinationObject = $destinationObject;
  }

}
