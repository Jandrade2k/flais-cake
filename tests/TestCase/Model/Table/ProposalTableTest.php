<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProposalTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProposalTable Test Case
 */
class ProposalTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProposalTable
     */
    protected $Proposal;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Proposal',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Proposal') ? [] : ['className' => ProposalTable::class];
        $this->Proposal = $this->getTableLocator()->get('Proposal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Proposal);

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
