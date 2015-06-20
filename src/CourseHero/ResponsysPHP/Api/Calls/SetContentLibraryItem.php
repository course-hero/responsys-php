<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class SetContentLibraryItem
{

  /**
   * 
   * @var InteractObject $contentLibraryLocation
   * @access public
   */
  public $contentLibraryLocation = null;

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
   * @param InteractObject $contentLibraryLocation
   * @param string $type
   * @param ItemData $itemData
   * @access public
   */
  public function __construct($contentLibraryLocation = null, $type = null, $itemData = null)
  {
    $this->contentLibraryLocation = $contentLibraryLocation;
    $this->type = $type;
    $this->itemData = $itemData;
  }

}
