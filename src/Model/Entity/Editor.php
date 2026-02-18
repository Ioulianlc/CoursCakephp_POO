<?php //src/Model/Entity/Editor.php 

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Editor extends Entity{

    //on definit les variable qui sont modifiable saud l'id
    protected array $_accessible = [
        "*" => true,
        "id" => false
    ];
       
}
