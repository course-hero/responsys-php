<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class CreateProfileExtensionTable
{

  /**
   * 
   * @var InteractObject $profileExtension
   * @access public
   */
  public $profileExtension = null;

  /**
   * 
   * @var Field $fields
   * @access public
   */
  public $fields = null;

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @param InteractObject $profileExtension
   * @param Field $fields
   * @param InteractObject $list
   * @access public
   */
  public function __construct($profileExtension = null, $fields = null, $list = null)
  {
    $this->profileExtension = $profileExtension;
    $this->fields = $fields;
    $this->list = $list;
  }

}
