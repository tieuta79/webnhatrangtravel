<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypevehiclesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypevehiclesTable Test Case
 */
class TypevehiclesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypevehiclesTable
     */
    public $Typevehicles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typevehicles',
        'app.vehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typevehicles') ? [] : ['className' => TypevehiclesTable::class];
        $this->Typevehicles = TableRegistry::get('Typevehicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typevehicles);

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
