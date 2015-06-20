<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ContentResult
{

  /**
   * 
   * @var string $content
   * @access public
   */
  public $content = null;

  /**
   * 
   * @var ContentFormat $format
   * @access public
   */
  public $format = null;

  /**
   * 
   * @var CharacterEncoding $characterEncoding
   * @access public
   */
  public $characterEncoding = null;

  /**
   * 
   * @param string $content
   * @param ContentFormat $format
   * @param CharacterEncoding $characterEncoding
   * @access public
   */
  public function __construct($content = null, $format = null, $characterEncoding = null)
  {
    $this->content = $content;
    $this->format = $format;
    $this->characterEncoding = $characterEncoding;
  }

}
