<?php //src/Model/Table/PublishersTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class PublishersTable extends Table{

    public function initialize(array $config) : void{
        parent::initialize($config);

        //il gère tout seul les created et modified 
        $this->addBehavior('Timestamp');
    }
}