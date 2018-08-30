<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagetoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagetoursTable Test Case
 */
class ImagetoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagetoursTable
     */
    public $Imagetours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagetours',
        'app.tours'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imagetours') ? [] : ['className' => ImagetoursTable::class];
        $this->Imagetours = TableRegistry::get('Imagetours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagetours);

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
