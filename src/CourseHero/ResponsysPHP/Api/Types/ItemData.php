<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ItemData
{

  /**
   * 
   * @var base64Binary $item
   * @access public
   */
  public $item = null;

  /**
   * 
   * @param base64Binary $item
   * @access public
   */
  public function __construct($item = null)
  {
    $this->item = $item;
  }

}
