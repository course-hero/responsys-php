<?php
namespace CourseHero\ResponsysPHP\Tests\Api\ResponsysWSService;


use CourseHero\ResponsysPHP\Api\Calls\ListFolders;
use CourseHero\ResponsysPHP\Api\ResponsysWSService;
use CourseHero\ResponsysPHP\Api\Types\LoginResponse;
use CourseHero\ResponsysPHP\Api\Types\LoginResult;

class AuthenticatedEndpointTest extends \PHPUnit_Framework_TestCase
{

    /**  @var ResponsysWSServiceAuthenticationStub */
    protected $service;

    public function setUp()
    {
        $this->service = new ResponsysWSServiceAuthenticationStub("username", "pass");
    }


    /**
     * @dataProvider authenticatedRequestsData
     */
    public function testAuthenticatedRequests($funcitonName){
        $functionName = "listFolders";
        $class = new \ReflectionClass('\CourseHero\ResponsysPHP\Api\ResponsysWSService');
        $method = $class->getMethod($functionName);

        $parameters = $method->getParameters();

        $method->invoke($this->service, $parameters[0]->getClass()->newInstance());

        $this->assertEquals(2, count($this->service->soapCalls), "should make two calls, one authenticated, one not");
        $this->assertEquals("login", $this->service->soapCalls[0][0], "first function call should be to login");
        $this->assertEquals($functionName, $this->service->soapCalls[1][0], "second function call should be to method");
    }

    public function authenticatedRequestsData(){
        return [
            ["craeteFolder"],
            ["listFolders"],
            ["deleteFolder"],
            ["triggerCampaignMessage"],
            ["HaMergeTriggerEmail"],
            ["mergeTriggerEmail"],
            ["mergeTriggerSMS"],
            ["triggerCustomEvent"],
            ["launchCampaign"],
            ["scheduleCampaignLaunch"],
            ["getLaunchStatus"],
            ["mergeListMembers"],
            ["retrieveListMembers"],
            ["deleteListMembers"],
            ["deleteProfileExtensionMembers"],
            ["createTable"],
            ["deleteTable"],
            ["mergeTableRecords"],
            ["retrieveTableRecords"],
            ["deleteTableRecords"],
            ["truncateTable"],
            ["createDocument"],
            ["deleteDocument"],
            ["setDocumentImage"],
            ["getDocumentImages"],
            ["setDocumentContent"],
            ["getDocumentContent"],
            ["mergeListMembersRIID"],
            ["mergeIntoProfileExtension"],
            ["createTableWithPK"],
            ["mergeTableRecordsWithPK"],
            ["retrieveProfileExtensionRecords"],
            ["listContentLibraryFolders"],
            ["doesContentLibraryFolderExist"],
            ["deleteContentLibraryFolder"],
            ["createContentLibraryFolder"],
            ["createContentLibraryItem"],
            ["setContentLibraryItem"],
            ["deleteContentLibraryItem"],
            ["getContentLibraryItem"],
            ["HaMergeTriggerSms"],
            ["createProfileExtensionTable"],
        ];
    }
}

class ResponsysWSServiceAuthenticationStub extends ResponsysWSService{
    public $soapCalls = [];

    public function __soapCall ($function_name, $arguments, $options = NULL, $input_headers = NULL, &$output_headers = NULL) {
        $this->soapCalls[] = func_get_args();

        if ($function_name == 'login'){
            //fake login
            return new LoginResponse(new LoginResult("SESSION_ID"));
        }
    }

}