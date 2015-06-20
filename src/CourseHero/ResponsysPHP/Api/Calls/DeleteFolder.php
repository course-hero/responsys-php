<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteFolder
{

  /**
   * 
   * @var string $folderName
   * @access public
   */
  public $folderName = null;

  /**
   * 
   * @param string $folderName
   * @access public
   */
  public function __construct($folderName = null)
  {
    $this->folderName = $folderName;
  }

}
