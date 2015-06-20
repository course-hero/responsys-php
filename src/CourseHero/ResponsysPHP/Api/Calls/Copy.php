<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class Copy
{

  /**
   * 
   * @var InteractObject $existingObject
   * @access public
   */
  public $existingObject = null;

  /**
   * 
   * @var InteractObject $newObject
   * @access public
   */
  public $newObject = null;

  /**
   * 
   * @param InteractObject $existingObject
   * @param InteractObject $newObject
   * @access public
   */
  public function __construct($existingObject = null, $newObject = null)
  {
    $this->existingObject = $existingObject;
    $this->newObject = $newObject;
  }

}
