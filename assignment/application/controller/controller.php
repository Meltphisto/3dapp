<?php
class Controller {

	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}

    // loading home page
	function home()
	{
		//$this->model->dbCreateTable();
		//$this->model->dbInsertData();
		$data = $this->model->dbGetData();
		$this->load->view('CokeHome', $data);
	}
	
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		echo "Data Read Function";
	}

}
?>    