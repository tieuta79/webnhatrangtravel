<?php
namespace App\Test\TestCase\Controller;

use App\Controller\FoodsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\FoodsController Test Case
 */
class FoodsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.foods',
        'app.restaurants',
        'app.typefoods',
        'app.comments',
        'app.users',
        'app.tours',
        'app.vehicles',
        'app.hotels',
        'app.places',
        'app.whishlists',
        'app.discounts',
        'app.discounts_foods'
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
