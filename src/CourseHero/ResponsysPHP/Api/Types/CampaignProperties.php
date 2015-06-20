<?php

namespace CourseHero\ResponsysPHP\Api\Types;

class CampaignProperties
{

  /**
   * 
   * @var InteractObject $campaign
   * @access public
   */
  public $campaign = null;

  /**
   * 
   * @var int $campaignId
   * @access public
   */
  public $campaignId = null;

  /**
   * 
   * @var CampaignType $campaignType
   * @access public
   */
  public $campaignType = null;

  /**
   * 
   * @var string $description
   * @access public
   */
  public $description = null;

  /**
   * 
   * @var string $marketingProgram
   * @access public
   */
  public $marketingProgram = null;

  /**
   * 
   * @var string $marketingStrategy
   * @access public
   */
  public $marketingStrategy = null;

  /**
   * 
   * @var InteractObject $list
   * @access public
   */
  public $list = null;

  /**
   * 
   * @var InteractObject $refiningFilters
   * @access public
   */
  public $refiningFilters = null;

  /**
   * 
   * @var InteractObject $refiningDataSource
   * @access public
   */
  public $refiningDataSource = null;

  /**
   * 
   * @var InteractObject $governanceFilter
   * @access public
   */
  public $governanceFilter = null;

  /**
   * 
   * @var InteractObject $supplementalCampaignDataSources
   * @access public
   */
  public $supplementalCampaignDataSources = null;

  /**
   * 
   * @var InteractObject $suppressionLists
   * @access public
   */
  public $suppressionLists = null;

  /**
   * 
   * @var InteractObject $supplementalProofDataSources
   * @access public
   */
  public $supplementalProofDataSources = null;

  /**
   * 
   * @var InteractObject $supplementalSeedDataSources
   * @access public
   */
  public $supplementalSeedDataSources = null;

  /**
   * 
   * @var InteractObject $proofList
   * @access public
   */
  public $proofList = null;

  /**
   * 
   * @var InteractObject $seedList
   * @access public
   */
  public $seedList = null;

  /**
   * 
   * @var InteractObject $segmentation
   * @access public
   */
  public $segmentation = null;

  /**
   * 
   * @var string $fromName
   * @access public
   */
  public $fromName = null;

  /**
   * 
   * @var string $fromEmail
   * @access public
   */
  public $fromEmail = null;

  /**
   * 
   * @var string $replyToEmail
   * @access public
   */
  public $replyToEmail = null;

  /**
   * 
   * @var string $bccEmail
   * @access public
   */
  public $bccEmail = null;

  /**
   * 
   * @var string $subject
   * @access public
   */
  public $subject = null;

  /**
   * 
   * @var InteractObject $htmlMessage
   * @access public
   */
  public $htmlMessage = null;

  /**
   * 
   * @var InteractObject $textMessage
   * @access public
   */
  public $textMessage = null;

  /**
   * 
   * @var boolean $enableLinkTracking
   * @access public
   */
  public $enableLinkTracking = null;

  /**
   * 
   * @var InteractObject $linkTable
   * @access public
   */
  public $linkTable = null;

  /**
   * 
   * @var boolean $enableExternalTracking
   * @access public
   */
  public $enableExternalTracking = null;

  /**
   * 
   * @var OptionalData $externalTrackingParams
   * @access public
   */
  public $externalTrackingParams = null;

  /**
   * 
   * @var InteractObject $attachments
   * @access public
   */
  public $attachments = null;

  /**
   * 
   * @var OptionalData $campaignVariables
   * @access public
   */
  public $campaignVariables = null;

  /**
   * 
   * @var CampaignPurpose $campaignPurpose
   * @access public
   */
  public $campaignPurpose = null;

  /**
   * 
   * @var boolean $useUTF8
   * @access public
   */
  public $useUTF8 = null;

  /**
   * 
   * @var RecipientLocale $locale
   * @access public
   */
  public $locale = null;

  /**
   * 
   * @var boolean $trackHtmlOpens
   * @access public
   */
  public $trackHtmlOpens = null;

  /**
   * 
   * @var boolean $trackConversions
   * @access public
   */
  public $trackConversions = null;

  /**
   * 
   * @var boolean $sendTextIfHTMLUnknown
   * @access public
   */
  public $sendTextIfHTMLUnknown = null;

  /**
   * 
   * @var string $segmentTrackingColumnName
   * @access public
   */
  public $segmentTrackingColumnName = null;

  /**
   * 
   * @var UnsubscribeOption $unsubscribeOption
   * @access public
   */
  public $unsubscribeOption = null;

  /**
   * 
   * @var string $unsubscribeForm
   * @access public
   */
  public $unsubscribeForm = null;

  /**
   * 
   * @var AutoCloseOption $autoCloseOption
   * @access public
   */
  public $autoCloseOption = null;

  /**
   * 
   * @var string $autoCloseValue
   * @access public
   */
  public $autoCloseValue = null;

  /**
   * 
   * @var string $closedCampaignURL
   * @access public
   */
  public $closedCampaignURL = null;

  /**
   * 
   * @var string $externalCampaignCode
   * @access public
   */
  public $externalCampaignCode = null;

  /**
   * 
   * @var string $salesForceCampaignId
   * @access public
   */
  public $salesForceCampaignId = null;

  /**
   * 
   * @param InteractObject $campaign
   * @param int $campaignId
   * @param CampaignType $campaignType
   * @param string $description
   * @param string $marketingProgram
   * @param string $marketingStrategy
   * @param InteractObject $list
   * @param InteractObject $refiningFilters
   * @param InteractObject $refiningDataSource
   * @param InteractObject $governanceFilter
   * @param InteractObject $supplementalCampaignDataSources
   * @param InteractObject $suppressionLists
   * @param InteractObject $supplementalProofDataSources
   * @param InteractObject $supplementalSeedDataSources
   * @param InteractObject $proofList
   * @param InteractObject $seedList
   * @param InteractObject $segmentation
   * @param string $fromName
   * @param string $fromEmail
   * @param string $replyToEmail
   * @param string $bccEmail
   * @param string $subject
   * @param InteractObject $htmlMessage
   * @param InteractObject $textMessage
   * @param boolean $enableLinkTracking
   * @param InteractObject $linkTable
   * @param boolean $enableExternalTracking
   * @param OptionalData $externalTrackingParams
   * @param InteractObject $attachments
   * @param OptionalData $campaignVariables
   * @param CampaignPurpose $campaignPurpose
   * @param boolean $useUTF8
   * @param RecipientLocale $locale
   * @param boolean $trackHtmlOpens
   * @param boolean $trackConversions
   * @param boolean $sendTextIfHTMLUnknown
   * @param string $segmentTrackingColumnName
   * @param UnsubscribeOption $unsubscribeOption
   * @param string $unsubscribeForm
   * @param AutoCloseOption $autoCloseOption
   * @param string $autoCloseValue
   * @param string $closedCampaignURL
   * @param string $externalCampaignCode
   * @param string $salesForceCampaignId
   * @access public
   */
  public function __construct($campaign = null, $campaignId = null, $campaignType = null, $description = null, $marketingProgram = null, $marketingStrategy = null, $list = null, $refiningFilters = null, $refiningDataSource = null, $governanceFilter = null, $supplementalCampaignDataSources = null, $suppressionLists = null, $supplementalProofDataSources = null, $supplementalSeedDataSources = null, $proofList = null, $seedList = null, $segmentation = null, $fromName = null, $fromEmail = null, $replyToEmail = null, $bccEmail = null, $subject = null, $htmlMessage = null, $textMessage = null, $enableLinkTracking = null, $linkTable = null, $enableExternalTracking = null, $externalTrackingParams = null, $attachments = null, $campaignVariables = null, $campaignPurpose = null, $useUTF8 = null, $locale = null, $trackHtmlOpens = null, $trackConversions = null, $sendTextIfHTMLUnknown = null, $segmentTrackingColumnName = null, $unsubscribeOption = null, $unsubscribeForm = null, $autoCloseOption = null, $autoCloseValue = null, $closedCampaignURL = null, $externalCampaignCode = null, $salesForceCampaignId = null)
  {
    $this->campaign = $campaign;
    $this->campaignId = $campaignId;
    $this->campaignType = $campaignType;
    $this->description = $description;
    $this->marketingProgram = $marketingProgram;
    $this->marketingStrategy = $marketingStrategy;
    $this->list = $list;
    $this->refiningFilters = $refiningFilters;
    $this->refiningDataSource = $refiningDataSource;
    $this->governanceFilter = $governanceFilter;
    $this->supplementalCampaignDataSources = $supplementalCampaignDataSources;
    $this->suppressionLists = $suppressionLists;
    $this->supplementalProofDataSources = $supplementalProofDataSources;
    $this->supplementalSeedDataSources = $supplementalSeedDataSources;
    $this->proofList = $proofList;
    $this->seedList = $seedList;
    $this->segmentation = $segmentation;
    $this->fromName = $fromName;
    $this->fromEmail = $fromEmail;
    $this->replyToEmail = $replyToEmail;
    $this->bccEmail = $bccEmail;
    $this->subject = $subject;
    $this->htmlMessage = $htmlMessage;
    $this->textMessage = $textMessage;
    $this->enableLinkTracking = $enableLinkTracking;
    $this->linkTable = $linkTable;
    $this->enableExternalTracking = $enableExternalTracking;
    $this->externalTrackingParams = $externalTrackingParams;
    $this->attachments = $attachments;
    $this->campaignVariables = $campaignVariables;
    $this->campaignPurpose = $campaignPurpose;
    $this->useUTF8 = $useUTF8;
    $this->locale = $locale;
    $this->trackHtmlOpens = $trackHtmlOpens;
    $this->trackConversions = $trackConversions;
    $this->sendTextIfHTMLUnknown = $sendTextIfHTMLUnknown;
    $this->segmentTrackingColumnName = $segmentTrackingColumnName;
    $this->unsubscribeOption = $unsubscribeOption;
    $this->unsubscribeForm = $unsubscribeForm;
    $this->autoCloseOption = $autoCloseOption;
    $this->autoCloseValue = $autoCloseValue;
    $this->closedCampaignURL = $closedCampaignURL;
    $this->externalCampaignCode = $externalCampaignCode;
    $this->salesForceCampaignId = $salesForceCampaignId;
  }

}
