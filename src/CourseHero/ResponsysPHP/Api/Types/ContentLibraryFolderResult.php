<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ContentLibraryFolderResult
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
