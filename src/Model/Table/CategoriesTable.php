<?php //src/Model/Table/CategoriesTable.php

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriesTable extends Table {

//void c'est comme null

    public function initialize(array $config) : void{
        parent::initialize($config);

        //il gère tout seul les created et modified 
        $this->addBehavior('Timestamp');
    }

    //ajoute les règles de validation sur les proprétés
    public function validationDefault(Validator $validator): Validator{
        $validator->notEmptyString('name')
            ->maxLength('name', 50)
            ->allowEmptyString('description')
            ->maxLength('description', 1000);

        return $validator;
    }

}