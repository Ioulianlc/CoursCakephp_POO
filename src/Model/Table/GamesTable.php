<?php //src/Model/Table/GamesTable.php

namespace App\Model\Table;


use Cake\ORM\Table;

class GamesTable extends Table {

    public function initialize(array $config) : void{
        parent::initialize($config);

        //il gère tout seul les created et modified 
        $this->addBehavior('Timestamp');
    }

}