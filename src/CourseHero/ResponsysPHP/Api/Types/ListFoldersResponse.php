<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ListFoldersResponse
{

  /**
   * 
   * @var FolderResult[] $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param FolderResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
