<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class GetContentLibraryItemResponse
{

  /**
   * 
   * @var string $name
   * @access public
   */
  public $name = null;

  /**
   * 
   * @var string $type
   * @access public
   */
  public $type = null;

  /**
   * 
   * @var ItemData $itemData
   * @access public
   */
  public $itemData = null;

  /**
   * 
   * @param string $name
   * @param string $type
   * @param ItemData $itemData
   * @access public
   */
  public function __construct($name = null, $type = null, $itemData = null)
  {
    $this->name = $name;
    $this->type = $type;
    $this->itemData = $itemData;
  }

}
