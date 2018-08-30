<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TyperestaurantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TyperestaurantsTable Test Case
 */
class TyperestaurantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TyperestaurantsTable
     */
    public $Typerestaurants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typerestaurants',
        'app.restaurants',
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
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.foods',
        'app.typefoods',
        'app.discounts',
        'app.discounts_foods',
        'app.imageplaces',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.imagereviews',
        'app.likereviews',
        'app.feedbacks',
        'app.followers',
        'app.followings',
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
        $config = TableRegistry::exists('Typerestaurants') ? [] : ['className' => TyperestaurantsTable::class];
        $this->Typerestaurants = TableRegistry::get('Typerestaurants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typerestaurants);

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
