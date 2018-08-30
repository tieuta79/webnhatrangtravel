<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RestaurantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RestaurantsTable Test Case
 */
class RestaurantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RestaurantsTable
     */
    public $Restaurants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.restaurants',
        'app.users',
        'app.regions',
        'app.provinces',
        'app.hotels',
        'app.comments',
        'app.tours',
        'app.vehicles',
        'app.foods',
        'app.typefoods',
        'app.whishlists',
        'app.discounts',
        'app.discounts_foods',
        'app.places',
        'app.typeplaces',
        'app.details',
        'app.imageplaces',
        'app.imagehotels',
        'app.rooms',
        'app.imageregions',
        'app.imagerestaurants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Restaurants') ? [] : ['className' => RestaurantsTable::class];
        $this->Restaurants = TableRegistry::get('Restaurants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Restaurants);

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
