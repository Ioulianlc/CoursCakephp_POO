<?php //src/Controller/GamesController.php
namespace App\Controller;

use PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;

class GamesController extends AppController{
    
    public function index(){

        $list = $this->Games->find();

        // $this->set(['list' => $list]);
       //equivalent ecriture du set sous la forme compacté

        $this->set(compact(['list']));
    }

    public function info($id = null){
        //innitialise une variable $game et lui ajoute le contenu de l'objet de type (Entité Games)et qui a l'id $id 
        $game = $this->Games->get($id);

        $this->set(compact('game'));
    }
}