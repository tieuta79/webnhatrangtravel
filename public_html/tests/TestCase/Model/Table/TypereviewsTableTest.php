<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypereviewsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypereviewsTable Test Case
 */
class TypereviewsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypereviewsTable
     */
    public $Typereviews;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typereviews',
        'app.reviews',
        'app.users',
        'app.typeusers',
        'app.blackusers',
        'app.comments',
        'app.events',
        'app.imageevents',
        'app.rateevents',
        'app.likeevents',
        'app.feedbacks',
        'app.followers',
        'app.followings',
        'app.user_follow',
        'app.followings_user',
        'app.users_following',
        'app.hotels',
        'app.regions',
        'app.provinces',
        'app.imageregions',
        'app.places',
        'app.typeplaces',
        'app.likeplaces',
        'app.details',
        'app.plans',
        'app.likeplans',
        'app.imageplaces',
        'app.rateplaces',
        'app.restaurants',
        'app.foods',
        'app.typefoods',
        'app.whishlists',
        'app.tours',
        'app.imagetours',
        'app.ratetours',
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.ratevehicles',
        'app.discounts',
        'app.discounts_foods',
        'app.imagerestaurants',
        'app.raterestaurants',
        'app.typehotels',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.ratehotels',
        'app.messages_from',
        'app.users_from',
        'app.messages_to',
        'app.users_to',
        'app.imagereviews',
        'app.likereviews'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typereviews') ? [] : ['className' => TypereviewsTable::class];
        $this->Typereviews = TableRegistry::get('Typereviews', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typereviews);

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
}
