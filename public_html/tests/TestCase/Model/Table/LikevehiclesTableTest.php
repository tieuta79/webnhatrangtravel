<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LikevehiclesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LikevehiclesTable Test Case
 */
class LikevehiclesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LikevehiclesTable
     */
    public $Likevehicles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.likevehicles',
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
        'app.restaurants',
        'app.foods',
        'app.typefoods',
        'app.discounts',
        'app.discounts_foods',
        'app.imagerestaurants',
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.imageregions',
        'app.places',
        'app.typeplaces',
        'app.details',
        'app.imageplaces',
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
        $config = TableRegistry::exists('Likevehicles') ? [] : ['className' => LikevehiclesTable::class];
        $this->Likevehicles = TableRegistry::get('Likevehicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Likevehicles);

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
