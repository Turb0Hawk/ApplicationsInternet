<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoursesFixture
 */
class CoursesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 60, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'length' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lesson_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'instructor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'car_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'lesson_status_ref_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'customer_id' => ['type' => 'index', 'columns' => ['customer_id'], 'length' => []],
            'car_id' => ['type' => 'index', 'columns' => ['car_id'], 'length' => []],
            'instructor_id' => ['type' => 'index', 'columns' => ['instructor_id'], 'length' => []],
            'lesson_status_refs_id' => ['type' => 'index', 'columns' => ['lesson_status_ref_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'car_id' => ['type' => 'foreign', 'columns' => ['car_id'], 'references' => ['cars', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'customer_id' => ['type' => 'foreign', 'columns' => ['customer_id'], 'references' => ['customers', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'instructor_id' => ['type' => 'foreign', 'columns' => ['instructor_id'], 'references' => ['instructors', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'lesson_status_refs_id' => ['type' => 'foreign', 'columns' => ['lesson_status_ref_id'], 'references' => ['lesson_status_refs', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'length' => 1,
                'customer_id' => 1,
                'lesson_date' => '2019-10-15 17:44:28',
                'instructor_id' => 1,
                'car_id' => 1,
                'lesson_status_ref_id' => 1,
                'created' => '2019-10-15 17:44:28',
                'modified' => '2019-10-15 17:44:28'
            ],
        ];
        parent::init();
    }
}
