<?php
namespace App\Test\TestCase\View\Cell;

use App\View\Cell\ContentsCell;
use Cake\TestSuite\TestCase;

/**
 * App\View\Cell\ContentsCell Test Case
 */
class ContentsCellTest extends TestCase
{

    /**
     * Request mock
     *
     * @var \Cake\Network\Request|\PHPUnit_Framework_MockObject_MockObject
     */
    public $request;

    /**
     * Response mock
     *
     * @var \Cake\Http\Response|\PHPUnit_Framework_MockObject_MockObject
     */
    public $response;

    /**
     * Test subject
     *
     * @var \App\View\Cell\ContentsCell
     */
    public $Contents;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->request = $this->getMockBuilder('Cake\Network\Request')->getMock();
        $this->response = $this->getMockBuilder('Cake\Network\Response')->getMock();
        $this->Contents = new ContentsCell($this->request, $this->response);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contents);

        parent::tearDown();
    }

    /**
     * Test display method
     *
     * @return void
     */
    public function testDisplay()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
