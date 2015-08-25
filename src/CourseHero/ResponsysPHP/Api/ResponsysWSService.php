<?php

namespace CourseHero\ResponsysPHP\Api;

use CourseHero\ResponsysPHP\Api\Calls as Calls;
use CourseHero\ResponsysPHP\Api\Types as Types;


/**
 * Responsys Web Services API
 *
 */
class ResponsysWSService extends \SoapClient
{
    const REMOTE_WSDL = 'https://ws2.responsys.net/webservices/wsdl/ResponsysWS_Level1.wsdl';

    protected $authenticated;
    protected $username;
    protected $password;
    protected $sessionId;

    /**
     *
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        'ApiFault' => 'CourseHero\ResponsysPHP\Api\Types\ApiFault',
        'AccountFault' => 'CourseHero\ResponsysPHP\Api\Types\AccountFault',
        'FolderFault' => 'CourseHero\ResponsysPHP\Api\Types\FolderFault',
        'TriggeredMessageFault' => 'CourseHero\ResponsysPHP\Api\Types\TriggeredMessageFault',
        'CustomEventFault' => 'CourseHero\ResponsysPHP\Api\Types\CustomEventFault',
        'CampaignFault' => 'CourseHero\ResponsysPHP\Api\Types\CampaignFault',
        'ListFault' => 'CourseHero\ResponsysPHP\Api\Types\ListFault',
        'TableFault' => 'CourseHero\ResponsysPHP\Api\Types\TableFault',
        'LinkTableFault' => 'CourseHero\ResponsysPHP\Api\Types\LinkTableFault',
        'DocumentFault' => 'CourseHero\ResponsysPHP\Api\Types\DocumentFault',
        'ObjectFault' => 'CourseHero\ResponsysPHP\Api\Types\ObjectFault',
        'ConnectFault' => 'CourseHero\ResponsysPHP\Api\Types\ConnectFault',
        'ListExtensionFault' => 'CourseHero\ResponsysPHP\Api\Types\ListExtensionFault',
        'UnexpectedErrorFault' => 'CourseHero\ResponsysPHP\Api\Types\UnexpectedErrorFault',
        'UnrecoverableErrorFault' => 'CourseHero\ResponsysPHP\Api\Types\UnrecoverableErrorFault',
        'DuplicateApiRequestFault' => 'CourseHero\ResponsysPHP\Api\Types\DuplicateApiRequestFault',
        'login' => 'CourseHero\ResponsysPHP\Api\Calls\Login',
        'LoginResult' => 'CourseHero\ResponsysPHP\Api\Types\LoginResult',
        'loginResponse' => 'CourseHero\ResponsysPHP\Api\Types\LoginResponse',
        'ServerAuthResult' => 'CourseHero\ResponsysPHP\Api\Types\ServerAuthResult',
        'authenticateServer' => 'CourseHero\ResponsysPHP\Api\Calls\AuthenticateServer',
        'authenticateServerResponse' => 'CourseHero\ResponsysPHP\Api\Types\AuthenticateServerResponse',
        'loginWithCertificate' => 'CourseHero\ResponsysPHP\Api\Calls\LoginWithCertificate',
        'loginWithCertificateResponse' => 'CourseHero\ResponsysPHP\Api\Types\LoginWithCertificateResponse',
        'logout' => 'CourseHero\ResponsysPHP\Api\Calls\Logout',
        'logoutResponse' => 'CourseHero\ResponsysPHP\Api\Types\LogoutResponse',
        'createFolder' => 'CourseHero\ResponsysPHP\Api\Calls\CreateFolder',
        'createFolderResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateFolderResponse',
        'deleteFolder' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteFolder',
        'deleteFolderResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteFolderResponse',
        'listFolders' => 'CourseHero\ResponsysPHP\Api\Calls\ListFolders',
        'FolderResult' => 'CourseHero\ResponsysPHP\Api\Types\FolderResult',
        'listFoldersResponse' => 'CourseHero\ResponsysPHP\Api\Types\ListFoldersResponse',
        'listFolderObjects' => 'CourseHero\ResponsysPHP\Api\Calls\ListFolderObjects',
        'InteractObject' => 'CourseHero\ResponsysPHP\Api\Types\InteractObject',
        'FolderObjectResult' => 'CourseHero\ResponsysPHP\Api\Types\FolderObjectResult',
        'listFolderObjectsResponse' => 'CourseHero\ResponsysPHP\Api\Types\ListFolderObjectsResponse',
        'SessionHeader' => 'CourseHero\ResponsysPHP\Api\Types\SessionHeader',
        'AuthSessionHeader' => 'CourseHero\ResponsysPHP\Api\Types\AuthSessionHeader',
        'Recipient' => 'CourseHero\ResponsysPHP\Api\Types\Recipient',
        'OptionalData' => 'CourseHero\ResponsysPHP\Api\Types\OptionalData',
        'CampaignProperties' => 'CourseHero\ResponsysPHP\Api\Types\CampaignProperties',
        'RecipientData' => 'CourseHero\ResponsysPHP\Api\Types\RecipientData',
        'triggerCampaignMessage' => 'CourseHero\ResponsysPHP\Api\Calls\TriggerCampaignMessage',
        'TriggerResult' => 'CourseHero\ResponsysPHP\Api\Types\TriggerResult',
        'triggerCampaignMessageResponse' => 'CourseHero\ResponsysPHP\Api\Types\TriggerCampaignMessageResponse',
        'TriggerData' => 'CourseHero\ResponsysPHP\Api\Types\TriggerData',
        'HaMergeTriggerEmail' => 'CourseHero\ResponsysPHP\Api\Types\HaMergeTriggerEmail',
        'HaMergeTriggerEmailResponse' => 'CourseHero\ResponsysPHP\Api\Types\HaMergeTriggerEmailResponse',
        'mergeTriggerEmail' => 'CourseHero\ResponsysPHP\Api\Calls\MergeTriggerEmail',
        'mergeTriggerEmailResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeTriggerEmailResponse',
        'CustomEvent' => 'CourseHero\ResponsysPHP\Api\Types\CustomEvent',
        'triggerCustomEvent' => 'CourseHero\ResponsysPHP\Api\Calls\TriggerCustomEvent',
        'triggerCustomEventResponse' => 'CourseHero\ResponsysPHP\Api\Types\TriggerCustomEventResponse',
        'createCampaign' => 'CourseHero\ResponsysPHP\Api\Calls\CreateCampaign',
        'createCampaignResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateCampaignResponse',
        'setCampaignProperties' => 'CourseHero\ResponsysPHP\Api\Calls\SetCampaignProperties',
        'setCampaignPropertiesResponse' => 'CourseHero\ResponsysPHP\Api\Types\SetCampaignPropertiesResponse',
        'getCampaignProperties' => 'CourseHero\ResponsysPHP\Api\Calls\GetCampaignProperties',
        'getCampaignPropertiesResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetCampaignPropertiesResponse',
        'ProofLaunchOptions' => 'CourseHero\ResponsysPHP\Api\Types\ProofLaunchOptions',
        'LaunchPreferences' => 'CourseHero\ResponsysPHP\Api\Types\LaunchPreferences',
        'LaunchResult' => 'CourseHero\ResponsysPHP\Api\Types\LaunchResult',
        'LaunchStatusResult' => 'CourseHero\ResponsysPHP\Api\Types\LaunchStatusResult',
        'launchCampaign' => 'CourseHero\ResponsysPHP\Api\Calls\LaunchCampaign',
        'launchCampaignResponse' => 'CourseHero\ResponsysPHP\Api\Types\LaunchCampaignResponse',
        'scheduleCampaignLaunch' => 'CourseHero\ResponsysPHP\Api\Calls\ScheduleCampaignLaunch',
        'scheduleCampaignLaunchResponse' => 'CourseHero\ResponsysPHP\Api\Calls\ScheduleCampaignLaunchResponse',
        'getLaunchStatus' => 'CourseHero\ResponsysPHP\Api\Calls\GetLaunchStatus',
        'getLaunchStatusResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetLaunchStatusResponse',
        'getCampaignId' => 'CourseHero\ResponsysPHP\Api\Calls\GetCampaignId',
        'getCampaignIdResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetCampaignIdResponse',
        'deleteCampaign' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteCampaign',
        'deleteCampaignResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteCampaignResponse',
        'getLaunchesForCampaign' => 'CourseHero\ResponsysPHP\Api\Calls\GetLaunchesForCampaign',
        'getLaunchesForCampaignResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetLaunchesForCampaignResponse',
        'getOpenLaunches' => 'CourseHero\ResponsysPHP\Api\Calls\GetOpenLaunches',
        'getOpenLaunchesResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetOpenLaunchesResponse',
        'closeCampaign' => 'CourseHero\ResponsysPHP\Api\Calls\CloseCampaign',
        'closeCampaignResponse' => 'CourseHero\ResponsysPHP\Api\Types\CloseCampaignResponse',
        'unscheduleCampaignLaunch' => 'CourseHero\ResponsysPHP\Api\Calls\UnscheduleCampaignLaunch',
        'unscheduleCampaignLaunchResponse' => 'CourseHero\ResponsysPHP\Api\Types\UnscheduleCampaignLaunchResponse',
        'Field' => 'CourseHero\ResponsysPHP\Api\Types\Field',
        'createList' => 'CourseHero\ResponsysPHP\Api\Calls\CreateList',
        'createListResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateListResponse',
        'changeListSchema' => 'CourseHero\ResponsysPHP\Api\Calls\ChangeListSchema',
        'changeListSchemaResponse' => 'CourseHero\ResponsysPHP\Api\Types\ChangeListSchemaResponse',
        'deleteList' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteList',
        'deleteListResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteListResponse',
        'ListMergeRule' => 'CourseHero\ResponsysPHP\Api\Types\ListMergeRule',
        'mergeListMembers' => 'CourseHero\ResponsysPHP\Api\Calls\MergeListMembers',
        'mergeListMembersResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeListMembersResponse',
        'retrieveListMembers' => 'CourseHero\ResponsysPHP\Api\Calls\RetrieveListMembers',
        'retrieveListMembersResponse' => 'CourseHero\ResponsysPHP\Api\Types\RetrieveListMembersResponse',
        'deleteListMembers' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteListMembers',
        'DeleteResult' => 'CourseHero\ResponsysPHP\Api\Types\DeleteResult',
        'deleteListMembersResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteListMembersResponse',
        'deleteProfileExtensionMembers' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteProfileExtensionMembers',
        'deleteProfileExtensionMembersResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteProfileExtensionMembersResponse',
        'getUpdated' => 'CourseHero\ResponsysPHP\Api\Calls\GetUpdated',
        'GetUpdatedResult' => 'CourseHero\ResponsysPHP\Api\Types\GetUpdatedResult',
        'getUpdatedResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetUpdatedResponse',
        'createTable' => 'CourseHero\ResponsysPHP\Api\Calls\CreateTable',
        'createTableResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateTableResponse',
        'deleteTable' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteTable',
        'deleteTableResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteTableResponse',
        'changeTableSchema' => 'CourseHero\ResponsysPHP\Api\Calls\ChangeTableSchema',
        'changeTableSchemaResponse' => 'CourseHero\ResponsysPHP\Api\Types\ChangeTableSchemaResponse',
        'Record' => 'CourseHero\ResponsysPHP\Api\Types\Record',
        'RetrieveResult' => 'CourseHero\ResponsysPHP\Api\Types\RetrieveResult',
        'RecordData' => 'CourseHero\ResponsysPHP\Api\Types\RecordData',
        'SmsRecordData' => 'CourseHero\ResponsysPHP\Api\Types\SmsRecordData',
        'mergeTableRecords' => 'CourseHero\ResponsysPHP\Api\Calls\MergeTableRecords',
        'MergeResult' => 'CourseHero\ResponsysPHP\Api\Types\MergeResult',
        'mergeTableRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeTableRecordsResponse',
        'retrieveTableRecords' => 'CourseHero\ResponsysPHP\Api\Calls\RetrieveTableRecords',
        'retrieveTableRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\RetrieveTableRecordsResponse',
        'deleteTableRecords' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteTableRecords',
        'deleteTableRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteTableRecordsResponse',
        'truncateTable' => 'CourseHero\ResponsysPHP\Api\Calls\TruncateTable',
        'truncateTableResponse' => 'CourseHero\ResponsysPHP\Api\Types\TruncateTableResponse',
        'createSQLView' => 'CourseHero\ResponsysPHP\Api\Calls\CreateSQLView',
        'createSQLViewResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateSQLViewResponse',
        'createLinkTable' => 'CourseHero\ResponsysPHP\Api\Calls\CreateLinkTable',
        'createLinkTableResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateLinkTableResponse',
        'deleteLinkTable' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteLinkTable',
        'deleteLinkTableResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteLinkTableResponse',
        'mergeLinkRecords' => 'CourseHero\ResponsysPHP\Api\Calls\MergeLinkRecords',
        'mergeLinkRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeLinkRecordsResponse',
        'retrieveLinkRecords' => 'CourseHero\ResponsysPHP\Api\Calls\RetrieveLinkRecords',
        'retrieveLinkRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\RetrieveLinkRecordsResponse',
        'deleteLinkRecords' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteLinkRecords',
        'deleteLinkRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteLinkRecordsResponse',
        'createDocument' => 'CourseHero\ResponsysPHP\Api\Calls\CreateDocument',
        'createDocumentResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateDocumentResponse',
        'deleteDocument' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteDocument',
        'deleteDocumentResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteDocumentResponse',
        'ImageData' => 'CourseHero\ResponsysPHP\Api\Types\ImageData',
        'setDocumentImages' => 'CourseHero\ResponsysPHP\Api\Calls\SetDocumentImages',
        'setDocumentImagesResponse' => 'CourseHero\ResponsysPHP\Api\Types\SetDocumentImagesResponse',
        'getDocumentImages' => 'CourseHero\ResponsysPHP\Api\Calls\GetDocumentImages',
        'getDocumentImagesResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetDocumentImagesResponse',
        'setDocumentContent' => 'CourseHero\ResponsysPHP\Api\Calls\SetDocumentContent',
        'setDocumentContentResponse' => 'CourseHero\ResponsysPHP\Api\Types\SetDocumentContentResponse',
        'ContentResult' => 'CourseHero\ResponsysPHP\Api\Types\ContentResult',
        'getDocumentContent' => 'CourseHero\ResponsysPHP\Api\Calls\GetDocumentContent',
        'getDocumentContentResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetDocumentContentResponse',
        'copy' => 'CourseHero\ResponsysPHP\Api\Calls\Copy',
        'copyResponse' => 'CourseHero\ResponsysPHP\Api\Types\CopyResponse',
        'move' => 'CourseHero\ResponsysPHP\Api\Calls\Move',
        'moveResponse' => 'CourseHero\ResponsysPHP\Api\Types\MoveResponse',
        'getServerTimestamp' => 'CourseHero\ResponsysPHP\Api\Calls\GetServerTimestamp',
        'getServerTimestampResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetServerTimestampResponse',
        'DescribeObjectResult' => 'CourseHero\ResponsysPHP\Api\Types\DescribeObjectResult',
        'describeObjects' => 'CourseHero\ResponsysPHP\Api\Calls\DescribeObjects',
        'describeObjectsResponse' => 'CourseHero\ResponsysPHP\Api\Types\DescribeObjectsResponse',
        'RunJobResult' => 'CourseHero\ResponsysPHP\Api\Types\RunJobResult',
        'JobRunStatusResult' => 'CourseHero\ResponsysPHP\Api\Types\JobRunStatusResult',
        'ConnectJob' => 'CourseHero\ResponsysPHP\Api\Types\ConnectJob',
        'ConnectJobRun' => 'CourseHero\ResponsysPHP\Api\Types\ConnectJobRun',
        'ConnectJobRunLog' => 'CourseHero\ResponsysPHP\Api\Types\ConnectJobRunLog',
        'runJob' => 'CourseHero\ResponsysPHP\Api\Calls\RunJob',
        'runJobResponse' => 'CourseHero\ResponsysPHP\Api\Types\RunJobResponse',
        'getJobRunStatus' => 'CourseHero\ResponsysPHP\Api\Calls\GetJobRunStatus',
        'getJobRunStatusResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetJobRunStatusResponse',
        'getJobs' => 'CourseHero\ResponsysPHP\Api\Calls\GetJobs',
        'getJobsResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetJobsResponse',
        'getJobRuns' => 'CourseHero\ResponsysPHP\Api\Calls\GetJobRuns',
        'getJobRunsResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetJobRunsResponse',
        'getJobRunLog' => 'CourseHero\ResponsysPHP\Api\Calls\GetJobRunLog',
        'getJobRunLogResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetJobRunLogResponse',
        'RecipientResult' => 'CourseHero\ResponsysPHP\Api\Types\RecipientResult',
        'mergeListMembersRIID' => 'CourseHero\ResponsysPHP\Api\Calls\MergeListMembersRIID',
        'mergeListMembersRIIDResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeListMembersRIIDResponse',
        'mergeIntoProfileExtension' => 'CourseHero\ResponsysPHP\Api\Calls\MergeIntoProfileExtension',
        'mergeIntoProfileExtensionResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeIntoProfileExtensionResponse',
        'createTableWithPK' => 'CourseHero\ResponsysPHP\Api\Calls\CreateTableWithPK',
        'createTableWithPKResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateTableWithPKResponse',
        'mergeTableRecordsWithPK' => 'CourseHero\ResponsysPHP\Api\Calls\MergeTableRecordsWithPK',
        'mergeTableRecordsWithPKResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeTableRecordsWithPKResponse',
        'retrieveProfileExtensionRecords' => 'CourseHero\ResponsysPHP\Api\Calls\RetrieveProfileExtensionRecords',
        'retrieveProfileExtensionRecordsResponse' => 'CourseHero\ResponsysPHP\Api\Types\RetrieveProfileExtensionRecordsResponse',
        'listContentLibraryFolders' => 'CourseHero\ResponsysPHP\Api\Calls\ListContentLibraryFolders',
        'ContentLibraryFolderResult' => 'CourseHero\ResponsysPHP\Api\Types\ContentLibraryFolderResult',
        'listContentLibraryFoldersResponse' => 'CourseHero\ResponsysPHP\Api\Types\ListContentLibraryFoldersResponse',
        'doesContentLibraryFolderExist' => 'CourseHero\ResponsysPHP\Api\Calls\DoesContentLibraryFolderExist',
        'doesContentLibraryFolderExistResponse' => 'CourseHero\ResponsysPHP\Api\Types\DoesContentLibraryFolderExistResponse',
        'deleteContentLibraryFolder' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteContentLibraryFolder',
        'deleteContentLibraryFolderResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteContentLibraryFolderResponse',
        'createContentLibraryFolder' => 'CourseHero\ResponsysPHP\Api\Calls\CreateContentLibraryFolder',
        'createContentLibraryFolderResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateContentLibraryFolderResponse',
        'createContentLibraryItem' => 'CourseHero\ResponsysPHP\Api\Calls\CreateContentLibraryItem',
        'ItemData' => 'CourseHero\ResponsysPHP\Api\Types\ItemData',
        'createContentLibraryItemResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateContentLibraryItemResponse',
        'setContentLibraryItem' => 'CourseHero\ResponsysPHP\Api\Calls\SetContentLibraryItem',
        'setContentLibraryItemResponse' => 'CourseHero\ResponsysPHP\Api\Types\SetContentLibraryItemResponse',
        'deleteContentLibraryItem' => 'CourseHero\ResponsysPHP\Api\Calls\DeleteContentLibraryItem',
        'deleteContentLibraryItemResponse' => 'CourseHero\ResponsysPHP\Api\Types\DeleteContentLibraryItemResponse',
        'copyContentLibraryItem' => 'CourseHero\ResponsysPHP\Api\Calls\CopyContentLibraryItem',
        'copyContentLibraryItemResponse' => 'CourseHero\ResponsysPHP\Api\Types\CopyContentLibraryItemResponse',
        'moveContentLibraryItem' => 'CourseHero\ResponsysPHP\Api\Calls\MoveContentLibraryItem',
        'moveContentLibraryItemResponse' => 'CourseHero\ResponsysPHP\Api\Types\MoveContentLibraryItemResponse',
        'getContentLibraryItem' => 'CourseHero\ResponsysPHP\Api\Calls\GetContentLibraryItem',
        'getContentLibraryItemResponse' => 'CourseHero\ResponsysPHP\Api\Types\GetContentLibraryItemResponse',
        'HaMergeTriggerSms' => 'CourseHero\ResponsysPHP\Api\Types\HaMergeTriggerSms',
        'HaMergeTriggerSmsResponse' => 'CourseHero\ResponsysPHP\Api\Types\HaMergeTriggerSmsResponse',
        'mergeTriggerSMS' => 'CourseHero\ResponsysPHP\Api\Calls\MergeTriggerSMS',
        'mergeTriggerSMSResponse' => 'CourseHero\ResponsysPHP\Api\Types\MergeTriggerSMSResponse',
        'createProfileExtensionTable' => 'CourseHero\ResponsysPHP\Api\Calls\CreateProfileExtensionTable',
        'createProfileExtensionTableResponse' => 'CourseHero\ResponsysPHP\Api\Types\CreateProfileExtensionTableResponse');

    /**
     *
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct($username, $password, array $options = array(), $wsdl = null)
    {
        $wsdl = $wsdl ?: dirname(__FILE__) . DIRECTORY_SEPARATOR . 'ResponsysWS_Level1.wsdl';

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $this->username = $username;
        $this->password = $password;

        parent::__construct($wsdl, $options);
    }

    /**
     * Authenticate with default parameters
     */
    public function authenticate(){
        $this->login(new Calls\Login($this->username, $this->password));
    }

    /**
     * Login to the Responsys Web Services API.
     *
     * @param Calls\Login $parameters
     * @access public
     * @return Types\LoginResponse
     */
    public function login(Calls\Login $parameters)
    {
        $response = $this->__soapCall('login', array($parameters));
        $this->setSessionId($response->result->sessionId);
        return $response;
    }

    /**
     * Auhenticate the server.
     *
     * @param Calls\AuthenticateServer $parameters
     * @access public
     * @return Types\AuthenticateServerResponse
     */
    public function authenticateServer(Calls\AuthenticateServer $parameters)
    {
        $response = $this->__soapCall('authenticateServer', array($parameters));
        $this->setSessionId($response->result->sessionId);
        return $response;
    }

    /**
     * Login to the Responsys Web Services API using Certificate.
     *
     * @param Calls\LoginWithCertificate $parameters
     * @access public
     * @return Types\LoginWithCertificateResponse
     */
    public function loginWithCertificate(Calls\LoginWithCertificate $parameters)
    {
        $response = $this->__soapCall('loginWithCertificate', array($parameters));
        $this->setSessionId($response->result->sessionId);
        return $response;
    }

    /**
     * Logout of the Responsys Web Services API.
     *
     * @param Calls\Logout $parameters
     * @access public
     * @return Types\LogoutResponse
     */
    public function logout(Calls\Logout $parameters)
    {
        return $this->__soapCall('logout', array($parameters));
    }

    /**
     * Creates a new folder.
     *
     * @param Calls\CreateFolder $parameters
     * @access public
     * @return Types\CreateFolderResponse
     */
    public function createFolder(Calls\CreateFolder $parameters)
    {
        return $this->__authenticatedSoapCall('createFolder', array($parameters));
    }

    /**
     * Deletes an existing folder.
     *
     * @param Calls\DeleteFolder $parameters
     * @access public
     * @return Types\DeleteFolderResponse
     */
    public function deleteFolder(Calls\DeleteFolder $parameters)
    {
        return $this->__authenticatedSoapCall('deleteFolder', array($parameters));
    }

    /**
     * List folders in the Responsys account.
     *
     * @param Calls\ListFolders $parameters
     * @access public
     * @return Types\ListFoldersResponse
     */
    public function listFolders(Calls\ListFolders $parameters)
    {
        return $this->__authenticatedSoapCall('listFolders', array($parameters));
    }

    /**
     * Send Triggered Message to 1 or more recipients.
     *
     * @param Calls\TriggerCampaignMessage $parameters
     * @access public
     * @return Types\TriggerCampaignMessageResponse
     */
    public function triggerCampaignMessage(Calls\TriggerCampaignMessage $parameters)
    {
        return $this->__authenticatedSoapCall('triggerCampaignMessage', array($parameters));
    }

    /**
     * Merge And Send Triggered Message for 1 or more recipients.
     *
     * @param Calls\HaMergeTriggerEmail $parameters
     * @access public
     * @return Types\HaMergeTriggerEmailResponse
     */
    public function HaMergeTriggerEmail(Calls\HaMergeTriggerEmail $parameters)
    {
        return $this->__authenticatedSoapCall('HaMergeTriggerEmail', array($parameters));
    }

    /**
     * Merge And Send Triggered Message for 1 or more recipients.
     *
     * @param Calls\MergeTriggerEmail $parameters
     * @access public
     * @return Types\mergeTriggerEmailResponse
     */
    public function mergeTriggerEmail(Calls\MergeTriggerEmail $parameters)
    {
        return $this->__authenticatedSoapCall('mergeTriggerEmail', array($parameters));
    }

    /**
     * Merge And Send Triggered Message for 1 or more recipients.
     *
     * @param Calls\MergeTriggerSMS $parameters
     * @access public
     * @return Types\mergeTriggerSMSResponse
     */
    public function mergeTriggerSMS(Calls\MergeTriggerSMS $parameters)
    {
        return $this->__authenticatedSoapCall('mergeTriggerSMS', array($parameters));
    }

    /**
     * Trigger Custom Event to 1 or more recipients.
     *
     * @param Calls\TriggerCustomEvent $parameters
     * @access public
     * @return Types\TriggerCustomEventResponse
     */
    public function triggerCustomEvent(Calls\TriggerCustomEvent $parameters)
    {
        return $this->__authenticatedSoapCall('triggerCustomEvent', array($parameters));
    }

    /**
     * Launch a Campaign Immediately.
     *
     * @param Calls\LaunchCampaign $parameters
     * @access public
     * @return Types\LaunchCampaignResponse
     */
    public function launchCampaign(Calls\LaunchCampaign $parameters)
    {
        return $this->__authenticatedSoapCall('launchCampaign', array($parameters));
    }

    /**
     * Schedule a Campaign Launch.
     *
     * @param Calls\ScheduleCampaignLaunch $parameters
     * @access public
     * @return Types\ScheduleCampaignLaunchResponse
     */
    public function scheduleCampaignLaunch(Calls\ScheduleCampaignLaunch $parameters)
    {
        return $this->__authenticatedSoapCall('scheduleCampaignLaunch', array($parameters));
    }

    /**
     * Gets the launch info given a launch Id.
     *
     * @param Calls\GetLaunchStatus $parameters
     * @access public
     * @return Types\GetLaunchStatusResponse
     */
    public function getLaunchStatus(Calls\GetLaunchStatus $parameters)
    {
        return $this->__authenticatedSoapCall('getLaunchStatus', array($parameters));
    }

    /**
     * Merge data into a list.
     *
     * @param Calls\MergeListMembers $parameters
     * @access public
     * @return Types\MergeListMembersResponse
     */
    public function mergeListMembers(Calls\MergeListMembers $parameters)
    {
        return $this->__authenticatedSoapCall('mergeListMembers', array($parameters));
    }

    /**
     * Retrieves recipients from a list.
     *
     * @param Calls\RetrieveListMembers $parameters
     * @access public
     * @return Types\RetrieveListMembersResponse
     */
    public function retrieveListMembers(Calls\RetrieveListMembers $parameters)
    {
        return $this->__authenticatedSoapCall('retrieveListMembers', array($parameters));
    }

    /**
     * Deletes recipients from a list.
     *
     * @param Calls\DeleteListMembers $parameters
     * @access public
     * @return Types\DeleteListMembersResponse
     */
    public function deleteListMembers(Calls\DeleteListMembers $parameters)
    {
        return $this->__authenticatedSoapCall('deleteListMembers', array($parameters));
    }

    /**
     * Deletes recipients from a profile extension.
     *
     * @param Calls\DeleteProfileExtensionMembers $parameters
     * @access public
     * @return Types\DeleteProfileExtensionMembersResponse
     */
    public function deleteProfileExtensionMembers(Calls\DeleteProfileExtensionMembers $parameters)
    {
        return $this->__authenticatedSoapCall('deleteProfileExtensionMembers', array($parameters));
    }

    /**
     * Creates an empty table.
     *
     * @param Calls\CreateTable $parameters
     * @access public
     * @return Types\CreateTableResponse
     */
    public function createTable(Calls\CreateTable $parameters)
    {
        return $this->__authenticatedSoapCall('createTable', array($parameters));
    }

    /**
     * Deletes an existing table.
     *
     * @param Calls\DeleteTable $parameters
     * @access public
     * @return Types\DeleteTableResponse
     */
    public function deleteTable(Calls\DeleteTable $parameters)
    {
        return $this->__authenticatedSoapCall('deleteTable', array($parameters));
    }

    /**
     * Merge data into a table.
     *
     * @param Calls\MergeTableRecords $parameters
     * @access public
     * @return Types\MergeTableRecordsResponse
     */
    public function mergeTableRecords(Calls\MergeTableRecords $parameters)
    {
        return $this->__authenticatedSoapCall('mergeTableRecords', array($parameters));
    }

    /**
     * Retrieves records from table.
     *
     * @param Calls\RetrieveTableRecords $parameters
     * @access public
     * @return Types\RetrieveTableRecordsResponse
     */
    public function retrieveTableRecords(Calls\RetrieveTableRecords $parameters)
    {
        return $this->__authenticatedSoapCall('retrieveTableRecords', array($parameters));
    }

    /**
     * Deletes records from a table.
     *
     * @param Calls\DeleteTableRecords $parameters
     * @access public
     * @return Types\DeleteTableRecordsResponse
     */
    public function deleteTableRecords(Calls\DeleteTableRecords $parameters)
    {
        return $this->__authenticatedSoapCall('deleteTableRecords', array($parameters));
    }

    /**
     * Truncate data in existing table.
     *
     * @param Calls\TruncateTable $parameters
     * @access public
     * @return Types\TruncateTableResponse
     */
    public function truncateTable(Calls\TruncateTable $parameters)
    {
        return $this->__authenticatedSoapCall('truncateTable', array($parameters));
    }

    /**
     * Creates a document.
     *
     * @param Calls\CreateDocument $parameters
     * @access public
     * @return Types\CreateDocumentResponse
     */
    public function createDocument(Calls\CreateDocument $parameters)
    {
        return $this->__authenticatedSoapCall('createDocument', array($parameters));
    }

    /**
     * Deletes a document.
     *
     * @param Calls\DeleteDocument $parameters
     * @access public
     * @return Types\DeleteDocumentResponse
     */
    public function deleteDocument(Calls\DeleteDocument $parameters)
    {
        return $this->__authenticatedSoapCall('deleteDocument', array($parameters));
    }

    /**
     * Set images to a document.
     *
     * @param Calls\SetDocumentImages $parameters
     * @access public
     * @return Types\SetDocumentImagesResponse
     */
    public function setDocumentImages(Calls\SetDocumentImages $parameters)
    {
        return $this->__authenticatedSoapCall('setDocumentImages', array($parameters));
    }

    /**
     * Get images from a document.
     *
     * @param Calls\GetDocumentImages $parameters
     * @access public
     * @return Types\GetDocumentImagesResponse
     */
    public function getDocumentImages(Calls\GetDocumentImages $parameters)
    {
        return $this->__authenticatedSoapCall('getDocumentImages', array($parameters));
    }

    /**
     * Set content to a document.
     *
     * @param Calls\SetDocumentContent $parameters
     * @access public
     * @return Types\SetDocumentContentResponse
     */
    public function setDocumentContent(Calls\SetDocumentContent $parameters)
    {
        return $this->__authenticatedSoapCall('setDocumentContent', array($parameters));
    }

    /**
     * Get content of a document.
     *
     * @param Calls\GetDocumentContent $parameters
     * @access public
     * @return Types\GetDocumentContentResponse
     */
    public function getDocumentContent(Calls\GetDocumentContent $parameters)
    {
        return $this->__authenticatedSoapCall('getDocumentContent', array($parameters));
    }

    /**
     * Merge data into a list returning the recipient ids.
     *
     * @param Calls\MergeListMembersRIID $parameters
     * @access public
     * @return Types\MergeListMembersRIIDResponse
     */
    public function mergeListMembersRIID(Calls\MergeListMembersRIID $parameters)
    {
        return $this->__authenticatedSoapCall('mergeListMembersRIID', array($parameters));
    }

    /**
     * Merge data into a list extension returning the recipient ids.
     *
     * @param Calls\MergeIntoProfileExtension $parameters
     * @access public
     * @return Types\MergeIntoProfileExtensionResponse
     */
    public function mergeIntoProfileExtension(Calls\MergeIntoProfileExtension $parameters)
    {
        return $this->__authenticatedSoapCall('mergeIntoProfileExtension', array($parameters));
    }

    /**
     * Creates an empty table with primary keys.
     *
     * @param Calls\CreateTableWithPK $parameters
     * @access public
     * @return Types\CreateTableWithPKResponse
     */
    public function createTableWithPK(Calls\CreateTableWithPK $parameters)
    {
        return $this->__authenticatedSoapCall('createTableWithPK', array($parameters));
    }

    /**
     * Merge data into a table using primary keys.
     *
     * @param Calls\MergeTableRecordsWithPK $parameters
     * @access public
     * @return Types\MergeTableRecordsWithPKResponse
     */
    public function mergeTableRecordsWithPK(Calls\MergeTableRecordsWithPK $parameters)
    {
        return $this->__authenticatedSoapCall('mergeTableRecordsWithPK', array($parameters));
    }

    /**
     * Retrieves records from a list extension.
     *
     * @param Calls\RetrieveProfileExtensionRecords $parameters
     * @access public
     * @return Types\RetrieveProfileExtensionRecordsResponse
     */
    public function retrieveProfileExtensionRecords(Calls\RetrieveProfileExtensionRecords $parameters)
    {
        return $this->__authenticatedSoapCall('retrieveProfileExtensionRecords', array($parameters));
    }

    /**
     * List folders in the Content Library.
     *
     * @param Calls\ListContentLibraryFolders $parameters
     * @access public
     * @return Types\ListContentLibraryFoldersResponse
     */
    public function listContentLibraryFolders(Calls\ListContentLibraryFolders $parameters)
    {
        return $this->__authenticatedSoapCall('listContentLibraryFolders', array($parameters));
    }

    /**
     * Check if folder exists in the Content Library.
     *
     * @param Calls\DoesContentLibraryFolderExist $parameters
     * @access public
     * @return Types\DoesContentLibraryFolderExistResponse
     */
    public function doesContentLibraryFolderExist(Calls\DoesContentLibraryFolderExist $parameters)
    {
        return $this->__authenticatedSoapCall('doesContentLibraryFolderExist', array($parameters));
    }

    /**
     * Delete folder in the Content Library.
     *
     * @param Calls\DeleteContentLibraryFolder $parameters
     * @access public
     * @return Types\DeleteContentLibraryFolderResponse
     */
    public function deleteContentLibraryFolder(Calls\DeleteContentLibraryFolder $parameters)
    {
        return $this->__authenticatedSoapCall('deleteContentLibraryFolder', array($parameters));
    }

    /**
     * Create folder in the Content Library.
     *
     * @param Calls\CreateContentLibraryFolder $parameters
     * @access public
     * @return Types\CreateContentLibraryFolderResponse
     */
    public function createContentLibraryFolder(Calls\CreateContentLibraryFolder $parameters)
    {
        return $this->__authenticatedSoapCall('createContentLibraryFolder', array($parameters));
    }

    /**
     * Create asset in the Content Library.
     *
     * @param Calls\CreateContentLibraryItem $parameters
     * @access public
     * @return Types\CreateContentLibraryItemResponse
     */
    public function createContentLibraryItem(Calls\CreateContentLibraryItem $parameters)
    {
        return $this->__authenticatedSoapCall('createContentLibraryItem', array($parameters));
    }

    /**
     * Update asset in the Content Library.
     *
     * @param Calls\SetContentLibraryItem $parameters
     * @access public
     * @return Types\SetContentLibraryItemResponse
     */
    public function setContentLibraryItem(Calls\SetContentLibraryItem $parameters)
    {
        return $this->__authenticatedSoapCall('setContentLibraryItem', array($parameters));
    }

    /**
     * Delete asset in the Content Library.
     *
     * @param Calls\DeleteContentLibraryItem $parameters
     * @access public
     * @return Types\DeleteContentLibraryItemResponse
     */
    public function deleteContentLibraryItem(Calls\DeleteContentLibraryItem $parameters)
    {
        return $this->__authenticatedSoapCall('deleteContentLibraryItem', array($parameters));
    }

    /**
     * Get asset in the Content Library.
     *
     * @param Calls\GetContentLibraryItem $parameters
     * @access public
     * @return Types\GetContentLibraryItemResponse
     */
    public function getContentLibraryItem(Calls\GetContentLibraryItem $parameters)
    {
        return $this->__authenticatedSoapCall('getContentLibraryItem', array($parameters));
    }

    /**
     * Merge And Send Triggered Message for 1 or more recipients.
     *
     * @param Calls\HaMergeTriggerSms $parameters
     * @access public
     * @return Types\HaMergeTriggerSmsResponse
     */
    public function HaMergeTriggerSms(Calls\HaMergeTriggerSms $parameters)
    {
        return $this->__authenticatedSoapCall('HaMergeTriggerSms', array($parameters));
    }

    /**
     *
     * @param Calls\CreateProfileExtensionTable $parameters
     * @access public
     * @return Types\CreateProfileExtensionTableResponse
     */
    public function createProfileExtensionTable(Calls\CreateProfileExtensionTable $parameters)
    {
        return $this->__authenticatedSoapCall('createProfileExtensionTable', array($parameters));
    }

    /**
     * Returns true if this client is currently authenticated
     *
     * @return bool
     */
    public function isAuthenticated(){
        return $this->authenticated;
    }

    /**
     * Gets the session id currently in use
     *
     * @return string
     */
    public function getSessionId(){
        return $this->sessionId;
    }

    public function getJSessionId(){
        return $this->_cookies["JSESSIONID"][0];
    }

    /**
     * Set session information
     * Service will report as authenticated after setting session information
     *
     * @param $sessionId
     */
    public function setSessionId($sessionId, $jsessionId = null){
        $this->sessionId = $sessionId;
        $session_header = new \SoapVar(
            array(
                'sessionId' => new \SoapVar($this->sessionId, XSD_STRING, NULL, NULL, NULL, 'ws.rsys.com'),
            ), SOAP_ENC_OBJECT);
        $header = new \SoapHeader('ws.rsys.com', 'SessionHeader', $session_header);
        $this->__setSoapHeaders(array($header));

        if ($jsessionId) {
            $this->__setCookie("JSESSIONID", $jsessionId);
        }

        $this->authenticated = true;
    }

    protected function __authenticatedSoapCall ($functionName, array $arguments, array $options = null, $inputHeaders = null, array &$outputHeaders = null){
        if (!$this->authenticated){
            $this->authenticate();
        }

        return $this->__soapCall($functionName, $arguments, $options, $inputHeaders, $outputHeaders);
    }
}
