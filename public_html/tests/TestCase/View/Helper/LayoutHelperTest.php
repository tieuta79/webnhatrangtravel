<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\LayoutHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\LayoutHelper Test Case
 */
class LayoutHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\LayoutHelper
     */
    public $Layout;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Layout = new LayoutHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Layout);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
