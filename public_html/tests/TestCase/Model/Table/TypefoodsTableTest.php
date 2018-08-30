<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypefoodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypefoodsTable Test Case
 */
class TypefoodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypefoodsTable
     */
    public $Typefoods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typefoods',
        'app.foods',
        'app.restaurants',
        'app.users',
        'app.regions',
        'app.provinces',
        'app.hotels',
        'app.comments',
        'app.tours',
        'app.details',
        'app.places',
        'app.typeplaces',
        'app.imageplaces',
        'app.imagetours',
        'app.whishlists',
        'app.vehicles',
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.imageregions',
        'app.imagerestaurants',
        'app.discounts',
        'app.discounts_foods'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typefoods') ? [] : ['className' => TypefoodsTable::class];
        $this->Typefoods = TableRegistry::get('Typefoods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typefoods);

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
