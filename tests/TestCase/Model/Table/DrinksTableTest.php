<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DrinksTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DrinksTable Test Case
 */
class DrinksTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DrinksTable
     */
    protected $Drinks;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Drinks',
        'app.EventsTipos',
        'app.Recipes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Drinks') ? [] : ['className' => DrinksTable::class];
        $this->Drinks = $this->getTableLocator()->get('Drinks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Drinks);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
