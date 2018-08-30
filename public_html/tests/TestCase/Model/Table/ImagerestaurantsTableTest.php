<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagerestaurantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagerestaurantsTable Test Case
 */
class ImagerestaurantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagerestaurantsTable
     */
    public $Imagerestaurants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagerestaurants',
        'app.restaurants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imagerestaurants') ? [] : ['className' => ImagerestaurantsTable::class];
        $this->Imagerestaurants = TableRegistry::get('Imagerestaurants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagerestaurants);

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
