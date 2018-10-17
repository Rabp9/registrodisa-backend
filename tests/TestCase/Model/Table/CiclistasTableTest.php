<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CiclistasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CiclistasTable Test Case
 */
class CiclistasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CiclistasTable
     */
    public $Ciclistas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ciclistas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ciclistas') ? [] : ['className' => CiclistasTable::class];
        $this->Ciclistas = TableRegistry::get('Ciclistas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ciclistas);

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
