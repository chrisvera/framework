<?php 
class UsersController extends AppController { 


	public function __construct(){
		parent::__construct();
	}

	
	public function index(){
		//opcion 1
		$options= array(
			"conditions"=>"users.type_id=types.id"
			);

		$this->set("users", 
			$this->users->find(
				"users, types", 
				"all", 
				$options
				)
			);
		$this->set("usersCount", $this->users->find("users", "count"));
		$this->set("title", "listadoo");


		//opcion 2
		// $users =  $this->users->find("users", "all", $options);
		// $this->set("users",$users);

	}

	/**
	 * mtodo para agregar un usuario
	 * @return type
	 */
	public function add(){

		if ($_SESSION["type_name"]=="Administradores") {
			if ($_POST) {
				$pass = new Password();
				$_POST["password"] = $pass->getPassword($_POST["password"]);
				if ($this->users->save("users", $_POST)){
					$this->redirect(array("controller"=>"users"));
				}else{
					$this->redirect(array("controller"=>"types","method"=>"add"));				
				}
			}
			$this->set("types", $this->users->find("types"));
		}else{
			$this->redirect(array("controller"=>"users"));
			}
		}

/**
 * metodo para editar un usuario
 * @param type $id 
 * @return type
 */
	public function edit($id){
		if ($_POST) {
			if (!empty($_POST["NewPassword"])) {
				$pass = new Password();
				$_POST["password"] = $pass->getPassword($_POST["NewPassword"]);
				
			}
			
			if ($this->users->update("users", $_POST)) {
				$this->redirect(array("controller"=> "users"));
			}else{
				$this->redirect(
					array(
						"controller"=> "users",
						"method"=>"edit/".$_POST["id"])
					);
			}
		}
		$options = array(
			"conditions"=>"id=".$id
			);
		$this->set(
			"user",
			$this->users->find("users", "first", $options)
		);
		$this->set("types", $this->users->find("types"));
		
	}

/**
 * metodo para eliminar un usuario
 * @param type $id 
 * @return type
 */
	public function delete($id){
		$options = "users.id=".$id;
		if($this->users->delete("users", $options)){
			$this->redirect(array("controller"=>"users"));
		}

	}

/**
 * este metodo para qu ingrese un usuario mdiant el login
 * @return type
 */
	public function login(){
		$this->_view->setLayout("login");

		if($_POST){
			$pass = new Password();
			$filter = new Validations();
			$auth = new Authorization();

			$username = $filter->sanitizeText($_POST["username"]);
			$password = $filter->sanitizeText($_POST["password"]);


			$options = array(
				"field"=>
					"users.id as user_id,
					users.password as password,
					users.username as username,
					types.name as type_name",
				"conditions"=>
					"username='$username' and users.type_id=types.id"
					);

			$user = $this->users->find("users, types", 'first', $options);

			if ($pass->passwordVerify($password, $user["password"])) {
				$auth->login($user);
				$this->redirect(array("controller"=>"users"));
			}else{
				echo "Usuario no valido";
			}
		}
	}

/**
 * mtodo para salir de la sesion
 * @return type
 */
	public function logout(){
		$auth = new Authorization();
		$auth->logout();
	}
}
 


?>