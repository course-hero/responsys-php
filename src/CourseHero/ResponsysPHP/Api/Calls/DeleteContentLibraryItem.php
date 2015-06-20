<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteContentLibraryItem
{

  /**
   * 
   * @var InteractObject $contentLibraryLocation
   * @access public
   */
  public $contentLibraryLocation = null;

  /**
   * 
   * @param InteractObject $contentLibraryLocation
   * @access public
   */
  public function __construct($contentLibraryLocation = null)
  {
    $this->contentLibraryLocation = $contentLibraryLocation;
  }

}
