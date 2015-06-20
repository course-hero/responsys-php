<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateLinkTable
{

  /**
   * 
   * @var InteractObject $linkTable
   * @access public
   */
  public $linkTable = null;

  /**
   * 
   * @var string $description
   * @access public
   */
  public $description = null;

  /**
   * 
   * @param InteractObject $linkTable
   * @param string $description
   * @access public
   */
  public function __construct($linkTable = null, $description = null)
  {
    $this->linkTable = $linkTable;
    $this->description = $description;
  }

}
