<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateList
{

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var string $description
   * @access public
   */
  public $description = null;

  /**
   * 
   * @var Field $fields
   * @access public
   */
  public $fields = null;

  /**
   * 
   * @param InteractObject $list
   * @param string $description
   * @param Field $fields
   * @access public
   */
  public function __construct($list = null, $description = null, $fields = null)
  {
    $this->list = $list;
    $this->description = $description;
    $this->fields = $fields;
  }

}
