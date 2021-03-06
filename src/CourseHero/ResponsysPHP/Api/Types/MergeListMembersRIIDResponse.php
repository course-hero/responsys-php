<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class MergeListMembersRIIDResponse
{

  /**
   * 
   * @var RecipientResult $recipientResult
   * @access public
   */
  public $recipientResult = null;

  /**
   * 
   * @param RecipientResult $recipientResult
   * @access public
   */
  public function __construct($recipientResult = null)
  {
    $this->recipientResult = $recipientResult;
  }

}
