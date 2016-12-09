<?php 
/**
 * clase de types
 */
class typesController extends AppController {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//opcion 1
		$options= array(
			
			);

		$this->set("types", 
			$this->types->find(
				"types", 
				"all", 
				$options
				)
			);
	}

/**
 * el metodo add agrega los tipos de usuarios 
 * @return type
 */

	public function add(){

		if ($_SESSION["type_name"]=="Administradores") {
			if ($_POST) {
				//$pass = new Password();
				//$_POST["password"] = $pass->getPassword($_POST["password"]);
				if ($this->types->save("types", $_POST)){
					$this->redirect(array("controller"=>"types"));
				}else{
					$this->redirect(array("controller"=>"users","method"=>"add"));				
				}
			}
			$this->set("types", $this->types->find("types"));
		}else{
			$this->redirect(array("controller"=>"users"));
			}
		}
/**
 * edita los tipos d usuarios 
 * @param type $id 
 * @return type
 */
	public function edit($id){
		if ($_POST) {
			
			
			if ($this->types->update("types", $_POST)) {
				$this->redirect(array("controller"=> "types"));
			}else{
				$this->redirect(
					array(
						"controller"=> "types",
						"method"=>"edit/".$_POST["id"])
					);
			}
		}
		$options = array(
			"conditions"=>"id=".$id
			);
		$this->set(
			"type",
			$this->types->find("types", "first", $options)
		);
		$this->set("types", $this->types->find("types"));
		
	}

/**
 * metodo para la eliminacion de los tipos de usuarios
 * @param type $id 
 * @return type
 */
	public function delete($id){
		$options = "types.id=".$id;
		if($this->types->delete("types", $options)){
			$this->redirect(array("controller"=>"types"));
		}

	}
}