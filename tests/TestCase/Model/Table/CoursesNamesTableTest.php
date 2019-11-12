<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursesNamesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursesNamesTable Test Case
 */
class CoursesNamesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursesNamesTable
     */
    public $CoursesNames;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CoursesNames'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CoursesNames') ? [] : ['className' => CoursesNamesTable::class];
        $this->CoursesNames = TableRegistry::getTableLocator()->get('CoursesNames', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursesNames);

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
}
