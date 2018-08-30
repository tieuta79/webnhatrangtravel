<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WhishlistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WhishlistsTable Test Case
 */
class WhishlistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WhishlistsTable
     */
    public $Whishlists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.whishlists',
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
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.imagetours',
        'app.events',
        'app.imageevents',
        'app.feedbacks',
        'app.followers',
        'app.followings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Whishlists') ? [] : ['className' => WhishlistsTable::class];
        $this->Whishlists = TableRegistry::get('Whishlists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Whishlists);

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
