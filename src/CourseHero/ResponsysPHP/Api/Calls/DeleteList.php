<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteList
{

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @param InteractObject $list
   * @access public
   */
  public function __construct($list = null)
  {
    $this->list = $list;
  }

}
