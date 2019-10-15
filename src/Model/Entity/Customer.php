<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property string $name
 * @property string $last_name
 * @property string $civil_number
 * @property string|null $street_name
 * @property int $user_id
 * @property string $phone_number
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Car[] $cars
 * @property \App\Model\Entity\Course[] $courses
 */
class Customer extends Entity
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
        'last_name' => true,
        'civil_number' => true,
        'street_name' => true,
        'user_id' => true,
        'phone_number' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
        'cars' => true,
        'courses' => true
    ];
}
