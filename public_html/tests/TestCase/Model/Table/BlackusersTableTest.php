<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlackusersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlackusersTable Test Case
 */
class BlackusersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BlackusersTable
     */
    public $Blackusers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.blackusers',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Blackusers') ? [] : ['className' => BlackusersTable::class];
        $this->Blackusers = TableRegistry::get('Blackusers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Blackusers);

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
