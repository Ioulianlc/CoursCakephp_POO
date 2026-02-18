<?php

namespace App\Controller;

class DashboardController extends AppController {
    // on créé une action qui s'appelle index
    // la premier fonction doit tjrs s'appeller index
    public function index(){

    }

    public function nombre(){
        $n = 42;

        // on transmet la valeur 
        $this->set(['nombre'=> $n]);
    }

    public function hello($p = null){

    $this->set(['nom' => $p]);
    }
    
}