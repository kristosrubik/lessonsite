<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Video Entity
 *
 * @property int $ID
 * @property string $title
 * @property string $link
 * @property int $subject_id
 *
 * @property \App\Model\Entity\Subject $subject
 */
class Video extends Entity
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
        'title' => true,
        'link' => true,
        'subject_id' => true,
        //'theme' => true
    ];
}
