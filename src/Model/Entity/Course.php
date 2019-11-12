<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $length
 * @property int $customer_id
 * @property \Cake\I18n\FrozenTime|null $lesson_date
 * @property int $instructor_id
 * @property int $car_id
 * @property int $lesson_status_ref_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Instructor $instructor
 * @property \App\Model\Entity\Car $car
 * @property \App\Model\Entity\LessonStatusRef $lesson_status_ref
 */
class Course extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'length' => true,
        'customer_id' => true,
        'lesson_date' => true,
        'instructor_id' => true,
        'car_id' => true,
        'lesson_status_ref_id' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'instructor' => true,
        'car' => true,
        'lesson_status_ref' => true,
        'courses_names' => true
    ];
}
