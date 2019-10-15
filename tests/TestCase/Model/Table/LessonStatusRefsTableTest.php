<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LessonStatusRefsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LessonStatusRefsTable Test Case
 */
class LessonStatusRefsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LessonStatusRefsTable
     */
    public $LessonStatusRefs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.LessonStatusRefs',
        'app.Courses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('LessonStatusRefs') ? [] : ['className' => LessonStatusRefsTable::class];
        $this->LessonStatusRefs = TableRegistry::getTableLocator()->get('LessonStatusRefs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LessonStatusRefs);

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
