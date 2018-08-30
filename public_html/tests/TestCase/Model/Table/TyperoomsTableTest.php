<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TyperoomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TyperoomsTable Test Case
 */
class TyperoomsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TyperoomsTable
     */
    public $Typerooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typerooms',
        'app.rooms',
        'app.hotels',
        'app.users',
        'app.regions',
        'app.provinces',
        'app.imageregions',
        'app.places',
        'app.typeplaces',
        'app.comments',
        'app.tours',
        'app.details',
        'app.imagetours',
        'app.whishlists',
        'app.vehicles',
        'app.foods',
        'app.restaurants',
        'app.imagerestaurants',
        'app.typefoods',
        'app.discounts',
        'app.discounts_foods',
        'app.imageplaces',
        'app.imagehotels',
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
        $config = TableRegistry::exists('Typerooms') ? [] : ['className' => TyperoomsTable::class];
        $this->Typerooms = TableRegistry::get('Typerooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typerooms);

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
