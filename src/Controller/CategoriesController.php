<?php //src/Controller/PublishersController.php
namespace App\Controller;

use Cake\Controller\Controller;
use PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;

class CategoriesController extends AppController{

    public function index(){
        //find() récupère plusieurs ligne dans categories
        $list = $this->Categories->find();

        // $this->set(['list' => $list]);
       //equivalent ecriture du set sous la forme compacté

        $this->set(compact(['list']));
    }

    public function detail($id = null){
        //innitialise une variable $categoty et lui ajoute le contenu de l'objet de type (Entité Categories)et qui a l'id $id 
        //get() recupère une seul ligne
        $category = $this->Categories->get($id);

        $this->set(compact('category'));
        //this->set(['category'=> $category]);
    }

    public function new(){
        //on cree une entité de categorie vide 
        $new = $this->Categories->newEmptyEntity();

        //si on à récup des données par le formulaire
        //actif que si le form est validé carpour l'enregistrer c'est une methode poste et pour ajouter uns nouvelle categorie c'est un "GET"
        if($this->request->is('post')){

        //on place les donnée dans l'entité vide 
        $new = $this->Categories->patchEntity($new, $this->request->getData());

        //si la sauvegarde ce passe bien 
        if($this->Categories->save($new)):

        //on créé un mess de confirmation 

        $this->Flash->success('Categorie enregistrée');

        //on redirige
        return $this->redirect(['controller' => 'Categories', 'action' => 'index']);

        //sinon
        else : $this->Flash->error('Sauvegarde impossible veuiller re-essayer');

        //on créé un mess d'erreur
        endif;

        //fin du test formulaire
        }

        //on transmet l'entité a la vue
        $this->set(compact('new'));
    }

    public function edit($id = null){
        //on recupère l'infos de l'objet souhaité
        $category = $this->Categories->get($id);

        //si on a recu des données
        if($this->request-> is(['post','patch', 'put'])):

        //on les place dans l'entité
        $category = $this->Categories->patchEntity($category, $this->request->getData());

        //si on peut sauvegarder
        if($this->Categories->save($category)):

        //mess success
        $this->Flash->success('Categorie modifiée');

        //redirection$
        return $this->redirect(['controller' => 'Categories', 'action'=> 'detail', $id]);


        //sinon mess erreur
        else :
            $this->Flash->error('Modification impossible');
        endif;

    endif;

        //fin tu test form

        //on le transmet a la vue
        $this->set(compact('category'));

    }
}
