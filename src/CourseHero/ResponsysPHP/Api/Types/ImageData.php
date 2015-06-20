<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class ImageData
{

  /**
   * 
   * @var base64Binary $image
   * @access public
   */
  public $image = null;

  /**
   * 
   * @var string $imageName
   * @access public
   */
  public $imageName = null;

  /**
   * 
   * @param base64Binary $image
   * @param string $imageName
   * @access public
   */
  public function __construct($image = null, $imageName = null)
  {
    $this->image = $image;
    $this->imageName = $imageName;
  }

}
