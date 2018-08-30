<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypehotelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypehotelsTable Test Case
 */
class TypehotelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypehotelsTable
     */
    public $Typehotels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typehotels',
        'app.hotels',
        'app.users',
        'app.typeusers',
        'app.blackusers',
        'app.comments',
        'app.reviews',
        'app.events',
        'app.imageevents',
        'app.places',
        'app.typeplaces',
        'app.regions',
        'app.provinces',
        'app.imageregions',
        'app.restaurants',
        'app.foods',
        'app.typefoods',
        'app.whishlists',
        'app.tours',
        'app.details',
        'app.imagetours',
        'app.vehicles',
        'app.typevehicles',
        'app.imagevehicles',
        'app.discounts',
        'app.discounts_foods',
        'app.imagerestaurants',
        'app.imageplaces',
        'app.imagereviews',
        'app.likereviews',
        'app.feedbacks',
        'app.followers',
        'app.followings',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typehotels') ? [] : ['className' => TypehotelsTable::class];
        $this->Typehotels = TableRegistry::get('Typehotels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typehotels);

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
