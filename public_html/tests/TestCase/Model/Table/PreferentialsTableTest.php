<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreferentialsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreferentialsTable Test Case
 */
class PreferentialsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PreferentialsTable
     */
    public $Preferentials;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.preferentials',
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
        $config = TableRegistry::exists('Preferentials') ? [] : ['className' => PreferentialsTable::class];
        $this->Preferentials = TableRegistry::get('Preferentials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Preferentials);

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
