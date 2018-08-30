<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImageregionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImageregionsTable Test Case
 */
class ImageregionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImageregionsTable
     */
    public $Imageregions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imageregions',
        'app.regions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imageregions') ? [] : ['className' => ImageregionsTable::class];
        $this->Imageregions = TableRegistry::get('Imageregions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imageregions);

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
