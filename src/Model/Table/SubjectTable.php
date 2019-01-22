<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subject Model
 *
 * @property \App\Model\Table\DescriptionTable|\Cake\ORM\Association\HasMany $Description
 * @property \App\Model\Table\ThemeTable|\Cake\ORM\Association\HasMany $Theme
 *
 * @method \App\Model\Entity\Subject get($primaryKey, $options = [])
 * @method \App\Model\Entity\Subject newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Subject[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subject|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subject|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Subject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Subject[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subject findOrCreate($search, callable $callback = null, $options = [])
 */
class SubjectTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('subject');
        $this->setDisplayField('name');
        $this->setPrimaryKey('ID');

        $this->hasMany('Description', [
            'foreignKey' => 'subject_id'
        ]);
        $this->hasMany('Theme', [
            'foreignKey' => 'subject_id'
        ]);
        $this->hasMany('Video', [
            'foreignKey' => 'subject_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('ID')
            ->allowEmpty('ID', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
