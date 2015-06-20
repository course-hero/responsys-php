<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class ListFolderObjects
{

  /**
   * 
   * @var string $folderName
   * @access public
   */
  public $folderName = null;

  /**
   * 
   * @var FolderObjectType $type
   * @access public
   */
  public $type = null;

  /**
   * 
   * @param string $folderName
   * @param FolderObjectType $type
   * @access public
   */
  public function __construct($folderName = null, $type = null)
  {
    $this->folderName = $folderName;
    $this->type = $type;
  }

}
