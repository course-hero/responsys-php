<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class GetContentLibraryItem
{

  /**
   * 
   * @var InteractObject $sourceObject
   * @access public
   */
  public $sourceObject = null;

  /**
   * 
   * @param InteractObject $sourceObject
   * @access public
   */
  public function __construct($sourceObject = null)
  {
    $this->sourceObject = $sourceObject;
  }

}
