<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property string $make
 * @property string $model
 * @property string|null $trim
 * @property string|null $transmission
 * @property string|null $drivetrain
 * @property int $customer_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\Course[] $courses
 */
class Car extends Entity
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
        'make' => true,
        'model' => true,
        'trim' => true,
        'transmission' => true,
        'drivetrain' => true,
        'customer_id' => true,
        'created' => true,
        'modified' => true,
        'customer' => true,
        'courses' => true
    ];
}
