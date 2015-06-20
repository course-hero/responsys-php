<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ListFolderObjectsResponse
{

  /**
   * 
   * @var FolderObjectResult $result
   * @access public
   */
  public $result = null;

  /**
   * 
   * @param FolderObjectResult $result
   * @access public
   */
  public function __construct($result = null)
  {
    $this->result = $result;
  }

}
