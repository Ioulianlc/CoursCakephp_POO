<?php //src/Model/Entity/Game.php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Game extends Entity{

//on definit les propriétées qui sont modifiables (tout sauf l'id)

    protected array $_accessible = [
        "*" => true,
        "id" => false
    ];
}