<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HotelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HotelsTable Test Case
 */
class HotelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HotelsTable
     */
    public $Hotels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hotels',
        'app.users',
        'app.regions',
        'app.comments',
        'app.tours',
        'app.vehicles',
        'app.foods',
        'app.restaurants',
        'app.typefoods',
        'app.whishlists',
        'app.discounts',
        'app.discounts_foods',
        'app.places',
        'app.imagehotels',
        'app.rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hotels') ? [] : ['className' => HotelsTable::class];
        $this->Hotels = TableRegistry::get('Hotels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hotels);

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
