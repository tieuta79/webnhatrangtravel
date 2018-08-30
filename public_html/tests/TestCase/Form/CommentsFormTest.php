<?php
namespace App\Test\TestCase\Form;

use App\Form\CommentsForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\CommentsForm Test Case
 */
class CommentsFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\CommentsForm
     */
    public $Comments;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Comments = new CommentsForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Comments);

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
