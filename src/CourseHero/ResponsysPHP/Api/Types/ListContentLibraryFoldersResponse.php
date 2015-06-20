<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ListContentLibraryFoldersResponse
{

  /**
   * 
   * @var ContentLibraryFolderResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param ContentLibraryFolderResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
