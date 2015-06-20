<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateContentLibraryFolder
{

  /**
   * 
   * @var string $path
   * @access public
   */
  public $path = null;

  /**
   * 
   * @param string $path
   * @access public
   */
  public function __construct($path = null)
  {
    $this->path = $path;
  }

}
