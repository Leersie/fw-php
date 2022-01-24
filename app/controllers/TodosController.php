<?php
namespace controllers;
 use Ubiquity\attributes\items\router\Get;
 use Ubiquity\attributes\items\router\Post;
 use Ubiquity\attributes\items\router\Route;

 /**
  * Controller TodosController
  */
class TodosController extends \controllers\ControllerBase{

    #[Post(path:'_default')]
	public function index(){
		
	}

    #[Post(path:'todos/add')]
	public function addElement(){
		
	}

     #[Get(path:'todos/delete/{index}')]
     public function deleteElement($index){

     }

     #[Post(path:'todos/edit/{index}')]
     public function editElement($index){

     }

     #[Get(path:'todos/loadList/{uniqid}')]
     public function loadList($uniqid){

     }

     #[Post(path:'todos/loadListPost')]
     public function loadListFromForm(){

     }

     #[Get(path:'todos/new/{force}')]
     public function newList($force){

     }

     #[Get(path:'todos/saveList')]
     public function saveList(){

     }


 }
