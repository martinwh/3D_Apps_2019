<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct() // contructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->home();
	}
    // home page function
	function home()
	{
		$data = $this->model->model3D_info();
		$this->load->view('view3DAppTest_2', $data);
	}
}
?>    