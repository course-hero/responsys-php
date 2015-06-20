<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class InteractObject
{

  /**
   * 
   * @var string $folderName
   * @access public
   */
  public $folderName = null;

  /**
   * 
   * @var string $objectName
   * @access public
   */
  public $objectName = null;

  /**
   * 
   * @param string $folderName
   * @param string $objectName
   * @access public
   */
  public function __construct($folderName = null, $objectName = null)
  {
    $this->folderName = $folderName;
    $this->objectName = $objectName;
  }

}
