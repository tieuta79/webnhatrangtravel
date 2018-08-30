<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeplacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeplacesTable Test Case
 */
class TypeplacesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeplacesTable
     */
    public $Typeplaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typeplaces',
        'app.places',
        'app.regions',
        'app.provinces',
        'app.hotels',
        'app.users',
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
        'app.imagehotels',
        'app.rooms',
        'app.typerooms',
        'app.preferentials',
        'app.imageregions',
        'app.imageplaces'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typeplaces') ? [] : ['className' => TypeplacesTable::class];
        $this->Typeplaces = TableRegistry::get('Typeplaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typeplaces);

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
