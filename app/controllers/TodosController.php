<?php
namespace controllers;
 use Ubiquity\attributes\items\router\Get;
 use Ubiquity\attributes\items\router\Post;
 use Ubiquity\attributes\items\router\Route;
 use Ubiquity\utils\http\USession;

 /**
  * Controller TodosController
  */
class TodosController extends \controllers\ControllerBase{

    const CACHE_KEY = 'datas/lists/';
    const EMPTY_LIST_ID='not saved';
    const LIST_SESSION_KEY='list';
    const ACTIVE_LIST_SESSION_KEY='active-list';

    #[Post(path:'_default')]
	public function index(){
		/*$list = USession::get(self::LIST_SESSION_KEY);
        $this->displayList($list);*/
        $this->jquery->click('button','$('.elm').toggle();');
        $this->jquery->renderDefaultView();
	}

    #[Post(path:'todos/add')]
	public function addElement(){
        //Récupère une valeur à la position list, retourne un tableau vide si la clé n'existe pas
        $list=USession::get('list',[]);
        print_r($list);

        //Modifie une valeur à la position list
        $list=USession::set(self::ACTIVE_LIST_SESSION_KEY,$list);

        //Teste l'existance de la clé ACTIVE_LIST_SESSION_KEY
        if(USession::exists(self::ACTIVE_LIST_SESSION_KEY)){
            echo "ça existe<br/>";
        }


		echo "oui";
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
        echo "save";
     }


    #[Route(path:'test')]
    public function test(){
        echo "<h1>Réponse Ajax</h1>";

    }

 }
