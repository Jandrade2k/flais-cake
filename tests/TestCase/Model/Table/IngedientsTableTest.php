<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IngedientsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IngedientsTable Test Case
 */
class IngedientsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IngedientsTable
     */
    protected $Ingedients;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ingedients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ingedients') ? [] : ['className' => IngedientsTable::class];
        $this->Ingedients = $this->getTableLocator()->get('Ingedients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ingedients);

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
}
