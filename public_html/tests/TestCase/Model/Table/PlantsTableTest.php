<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlantsTable Test Case
 */
class PlantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlantsTable
     */
    public $Plants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.plants',
        'app.users',
        'app.typeusers',
        'app.blackusers',
        'app.comments',
        'app.reviews',
        'app.events',
        'app.imageevents',
        'app.hotels',
        'app.regions',
        'app.provinces',
        'app.imageregions',
        'app.places',
        'app.typeplaces',
        'app.details',
        'app.tours',
        'app.imagetours',
        'app.whishlists',
        'app.restaurants',
        'app.foods',
        'app.typefoods',
        'app.discounts',
        'app.discounts_foods',
        'app.imagerestaurants',
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.imageplaces',
        'app.typehotels',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.imagereviews',
        'app.likereviews',
        'app.feedbacks',
        'app.followers',
        'app.followings',
        'app.user_follow',
        'app.followings_user',
        'app.users_following',
        'app.messages_from',
        'app.users_from',
        'app.messages_to',
        'app.users_to',
        'app.likeplants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Plants') ? [] : ['className' => PlantsTable::class];
        $this->Plants = TableRegistry::get('Plants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Plants);

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
