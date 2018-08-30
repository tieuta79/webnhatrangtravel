<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiscountsFoodsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiscountsFoodsTable Test Case
 */
class DiscountsFoodsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiscountsFoodsTable
     */
    public $DiscountsFoods;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.discounts_foods',
        'app.foods',
        'app.discounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DiscountsFoods') ? [] : ['className' => DiscountsFoodsTable::class];
        $this->DiscountsFoods = TableRegistry::get('DiscountsFoods', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DiscountsFoods);

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
