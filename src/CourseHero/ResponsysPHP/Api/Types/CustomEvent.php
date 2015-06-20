<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class CustomEvent
{

  /**
   * 
   * @var string $eventName
   * @access public
   */
  public $eventName = null;

  /**
   * 
   * @var int $eventId
   * @access public
   */
  public $eventId = null;

  /**
   * 
   * @var string $eventStringDataMapping
   * @access public
   */
  public $eventStringDataMapping = null;

  /**
   * 
   * @var string $eventDateDataMapping
   * @access public
   */
  public $eventDateDataMapping = null;

  /**
   * 
   * @var string $eventNumberDataMapping
   * @access public
   */
  public $eventNumberDataMapping = null;

  /**
   * 
   * @param string $eventName
   * @param int $eventId
   * @param string $eventStringDataMapping
   * @param string $eventDateDataMapping
   * @param string $eventNumberDataMapping
   * @access public
   */
  public function __construct($eventName = null, $eventId = null, $eventStringDataMapping = null, $eventDateDataMapping = null, $eventNumberDataMapping = null)
  {
    $this->eventName = $eventName;
    $this->eventId = $eventId;
    $this->eventStringDataMapping = $eventStringDataMapping;
    $this->eventDateDataMapping = $eventDateDataMapping;
    $this->eventNumberDataMapping = $eventNumberDataMapping;
  }

}
