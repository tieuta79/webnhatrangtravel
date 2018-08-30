<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\RestaurantsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\RestaurantsController Test Case
 */
class RestaurantsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.restaurants',
        'app.users',
        'app.regions',
        'app.provinces',
        'app.hotels',
        'app.comments',
        'app.tours',
        'app.vehicles',
        'app.foods',
        'app.typefoods',
        'app.whishlists',
        'app.discounts',
        'app.discounts_foods',
        'app.places',
        'app.typeplaces',
        'app.details',
        'app.imageplaces',
        'app.imagehotels',
        'app.rooms',
        'app.imageregions',
        'app.imagerestaurants'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
