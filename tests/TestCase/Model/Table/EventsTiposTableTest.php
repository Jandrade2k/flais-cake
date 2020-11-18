<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsTiposTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsTiposTable Test Case
 */
class EventsTiposTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsTiposTable
     */
    protected $EventsTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EventsTipos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EventsTipos') ? [] : ['className' => EventsTiposTable::class];
        $this->EventsTipos = $this->getTableLocator()->get('EventsTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EventsTipos);

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
