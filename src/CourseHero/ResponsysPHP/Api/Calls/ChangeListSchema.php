<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class ChangeListSchema
{

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var Field $addFields
   * @access public
   */
  public $addFields = null;

  /**
   * 
   * @var string $removeFields
   * @access public
   */
  public $removeFields = null;

  /**
   * 
   * @var string $renameFields
   * @access public
   */
  public $renameFields = null;

  /**
   * 
   * @param InteractObject $list
   * @param Field $addFields
   * @param string $removeFields
   * @param string $renameFields
   * @access public
   */
  public function __construct($list = null, $addFields = null, $removeFields = null, $renameFields = null)
  {
    $this->list = $list;
    $this->addFields = $addFields;
    $this->removeFields = $removeFields;
    $this->renameFields = $renameFields;
  }

}
