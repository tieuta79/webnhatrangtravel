<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetailsTable Test Case
 */
class DetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DetailsTable
     */
    public $Details;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.details',
        'app.plans',
        'app.users',
        'app.typeusers',
        'app.blackusers',
        'app.comments',
        'app.reviews',
        'app.events',
        'app.imageevents',
        'app.rateevents',
        'app.likeevents',
        'app.hotels',
        'app.regions',
        'app.provinces',
        'app.imageregions',
        'app.places',
        'app.typeplaces',
        'app.imageplaces',
        'app.restaurants',
        'app.foods',
        'app.typefoods',
        'app.whishlists',
        'app.tours',
        'app.imagetours',
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.discounts',
        'app.discounts_foods',
        'app.imagerestaurants',
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
        'app.users_to'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Details') ? [] : ['className' => DetailsTable::class];
        $this->Details = TableRegistry::get('Details', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Details);

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
