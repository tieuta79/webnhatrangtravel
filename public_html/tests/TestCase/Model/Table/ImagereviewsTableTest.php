<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagereviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagereviewsTable Test Case
 */
class ImagereviewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagereviewsTable
     */
    public $Imagereviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagereviews',
        'app.reviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imagereviews') ? [] : ['className' => ImagereviewsTable::class];
        $this->Imagereviews = TableRegistry::get('Imagereviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagereviews);

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
