<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class ListContentLibraryFolders
{

  /**
   * 
   * @var string $startingPath
   * @access public
   */
  public $startingPath = null;

  /**
   * 
   * @var boolean $showTree
   * @access public
   */
  public $showTree = null;

  /**
   * 
   * @param string $startingPath
   * @param boolean $showTree
   * @access public
   */
  public function __construct($startingPath = null, $showTree = null)
  {
    $this->startingPath = $startingPath;
    $this->showTree = $showTree;
  }

}
