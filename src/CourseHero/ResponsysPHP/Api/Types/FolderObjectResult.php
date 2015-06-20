<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class FolderObjectResult
{

  /**
   * 
   * @var int $id
   * @access public
   */
  public $id = null;

  /**
   * 
   * @var InteractObject $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @var FolderObjectType $type
   * @access public
   */
  public $type = null;

  /**
   * 
   * @var string $subType
   * @access public
   */
  public $subType = null;

  /**
   * 
   * @param int $id
   * @param InteractObject $name
   * @param FolderObjectType $type
   * @param string $subType
   * @access public
   */
  public function __construct($id = null, $name = null, $type = null, $subType = null)
  {
    $this->id = $id;
    $this->name = $name;
    $this->type = $type;
    $this->subType = $subType;
  }

}
