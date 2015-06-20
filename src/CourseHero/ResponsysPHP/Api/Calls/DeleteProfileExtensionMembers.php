<?php

namespace CourseHero\ResponsysPHP\Api\Calls;

class DeleteProfileExtensionMembers
{

  /**
   * 
   * @var InteractObject $profileExtension
   * @access public
   */
  public $profileExtension = null;

  /**
   * 
   * @var QueryColumn $queryColumn
   * @access public
   */
  public $queryColumn = null;

  /**
   * 
   * @var string $idsToDelete
   * @access public
   */
  public $idsToDelete = null;

  /**
   * 
   * @param InteractObject $profileExtension
   * @param QueryColumn $queryColumn
   * @param string $idsToDelete
   * @access public
   */
  public function __construct($profileExtension = null, $queryColumn = null, $idsToDelete = null)
  {
    $this->profileExtension = $profileExtension;
    $this->queryColumn = $queryColumn;
    $this->idsToDelete = $idsToDelete;
  }

}
