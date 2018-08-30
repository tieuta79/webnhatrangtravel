<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ToursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ToursTable Test Case
 */
class ToursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ToursTable
     */
    public $Tours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tours',
        'app.users',
        'app.regions',
        'app.provinces',
        'app.hotels',
        'app.comments',
        'app.vehicles',
        'app.foods',
        'app.restaurants',
        'app.imagerestaurants',
        'app.whishlists',
        'app.typefoods',
        'app.discounts',
        'app.discounts_foods',
        'app.places',
        'app.typeplaces',
        'app.details',
        'app.imageplaces',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.imageregions',
        'app.imagetours'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tours') ? [] : ['className' => ToursTable::class];
        $this->Tours = TableRegistry::get('Tours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tours);

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
