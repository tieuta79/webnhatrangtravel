<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagehotelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagehotelsTable Test Case
 */
class ImagehotelsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagehotelsTable
     */
    public $Imagehotels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagehotels',
        'app.hotels',
        'app.users',
        'app.regions',
        'app.comments',
        'app.tours',
        'app.vehicles',
        'app.foods',
        'app.restaurants',
        'app.typefoods',
        'app.whishlists',
        'app.discounts',
        'app.discounts_foods',
        'app.places',
        'app.rooms'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imagehotels') ? [] : ['className' => ImagehotelsTable::class];
        $this->Imagehotels = TableRegistry::get('Imagehotels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagehotels);

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
