<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Theme Entity
 *
 * @property int $ID
 * @property string $title
 * @property string $text
 * @property int $subject_id
 *
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Test[] $tests
 * @property \App\Model\Entity\Video[] $video
 */
class Theme extends Entity
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
        'text' => true,
        'subject_id' => true,
        'subject' => true,
        'tests' => true,
        'video' => true
    ];
}
