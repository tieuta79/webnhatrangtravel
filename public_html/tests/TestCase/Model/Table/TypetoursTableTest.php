<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypetoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypetoursTable Test Case
 */
class TypetoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypetoursTable
     */
    public $Typetours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typetours'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typetours') ? [] : ['className' => TypetoursTable::class];
        $this->Typetours = TableRegistry::get('Typetours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typetours);

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
