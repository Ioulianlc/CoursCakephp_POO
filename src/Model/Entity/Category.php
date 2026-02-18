<?php //src/Model/Enity/Category.php


namespace App\Model\Entity;

use Cake\ORM\Entity;

class Category extends Entity{

    //on definit les variable qui sont modifiable saud l'id
    protected array $_accessible = [
        "*" => true,
        "id" => false
    ];
       
}