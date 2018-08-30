<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehiclesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehiclesTable Test Case
 */
class VehiclesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VehiclesTable
     */
    public $Vehicles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehicles',
        'app.users',
        'app.typeusers',
        'app.blackusers',
        'app.comments',
        'app.tours',
        'app.regions',
        'app.provinces',
        'app.hotels',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.whishlists',
        'app.imageregions',
        'app.places',
        'app.typeplaces',
        'app.details',
        'app.imageplaces',
        'app.restaurants',
        'app.foods',
        'app.typefoods',
        'app.discounts',
        'app.discounts_foods',
        'app.imagerestaurants',
        'app.imagetours',
        'app.events',
        'app.imageevents',
        'app.feedbacks',
        'app.followers',
        'app.followings',
        'app.typevehicles',
        'app.imagevehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vehicles') ? [] : ['className' => VehiclesTable::class];
        $this->Vehicles = TableRegistry::get('Vehicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vehicles);

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
