<?php //src/Controller/PublishersController.php
namespace App\Controller;

use Cake\Controller\Controller;
use PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;

class PublishersController extends AppController{

    public function index(){
        $list = $this->Publishers->find();

        // $this->set(['list' => $list]);
       //equivalent ecriture du set sous la forme compacté

        $this->set(compact(['list']));
    }

    public function info($id = null){
        //innitialise une variable $editor et lui ajoute le contenu de l'objet de type (Entité Publishers)et qui a l'id $id 
        $editor = $this->Publishers->get($id);

        $this->set(compact('editor'));
    }
}
