<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database
		$dsn = 'sqlite:./db/CokeDatabase.db';
		
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    		PDO::ATTR_EMULATE_PREPARES => false,));
		}
		catch (PDOEXception $e) {
			echo "Faile to connect to the database!";
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Products (Id INTEGER PRIMARY KEY, taste_1 TEXT, taste_2 TEXT, productTitle_1 TEXT, productTitle_2 TEXT, imgName TEXT,link TEXT)");
			return "Model_3D table is successfully created inside CokeDatabase.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Products (Id, taste_1, taste_2, productTitle_1, productTitle_2, imgName, link) 
				VALUES (1, 'Coca-cola Orginal Taste', 'Coca‑Cola Cherry', '24 * 330 ml','Glass Bottles','Coca_logo','https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste'); " .
			"INSERT INTO Products (Id, taste_1, taste_2, productTitle_1, productTitle_2, imgName, link) 
			    VALUES (2, 'Sprite', 'Sprite Zero', '24 * 330 ml',' Glass Bottles','sprite_logo','https://www.coca-cola.com/gb/en/brands/sprite'); " .
			"INSERT INTO Products (Id, taste_1, taste_2, productTitle_1, productTitle_2, imgName, link) 
				VALUES (3, 'Dr Pepper', 'Dr Pepper Zero', '24 * 330 ml','& Fanta Bundle','DrPepper_logo','https://www.coca-cola.com/gb/en/brands/dr-pepper'); " );
			return "production model data inserted successfully inside CokeDatabase.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Products';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				$result[$i]['taste_1'] = $data['taste_1'];
				$result[$i]['taste_2'] = $data['taste_2'];
				$result[$i]['productTitle_1'] = $data['productTitle_1'];
				$result[$i]['productTitle_2'] = $data['productTitle_2'];
				$result[$i]['imgName'] = $data['imgName'];
				$result[$i]['link'] = $data['link'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
}
?>