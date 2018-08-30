<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommentplansTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommentplansTable Test Case
 */
class CommentplansTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CommentplansTable
     */
    public $Commentplans;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.commentplans',
        'app.users',
        'app.typeusers',
        'app.comments',
        'app.reviews',
        'app.imagereviews',
        'app.likereviews',
        'app.typereviews',
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
        'app.typerestaurants',
        'app.foods',
        'app.typefoods',
        'app.imagerestaurants',
        'app.raterestaurants',
        'app.tours',
        'app.typetours',
        'app.liketours',
        'app.imagetours',
        'app.ratetours',
        'app.vehicles',
        'app.typevehicles',
        'app.likevehicles',
        'app.imagevehicles',
        'app.ratevehicles',
        'app.typehotels',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.ratehotels',
        'app.likehotels',
        'app.likerestaurants',
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
        $config = TableRegistry::exists('Commentplans') ? [] : ['className' => CommentplansTable::class];
        $this->Commentplans = TableRegistry::get('Commentplans', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Commentplans);

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
