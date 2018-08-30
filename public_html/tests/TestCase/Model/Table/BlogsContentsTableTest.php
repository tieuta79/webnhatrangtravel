<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogsContentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogsContentsTable Test Case
 */
class BlogsContentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogsContentsTable
     */
    public $BlogsContents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.blogs_contents',
        'app.blogs',
        'app.contents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BlogsContents') ? [] : ['className' => BlogsContentsTable::class];
        $this->BlogsContents = TableRegistry::get('BlogsContents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BlogsContents);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
