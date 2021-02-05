<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CastingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CastingsTable Test Case
 */
class CastingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CastingsTable
     */
    protected $Castings;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Castings',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Castings') ? [] : ['className' => CastingsTable::class];
        $this->Castings = $this->getTableLocator()->get('Castings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Castings);

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
