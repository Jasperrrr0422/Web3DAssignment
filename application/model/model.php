<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry, Martin. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT ,x3dModelTitle TEXT, X3D_URL TEXT ,x3dCreationMethod TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		// $this->dbhandle = NULL;
	}

	public function dbCreateContentTable ()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Drink_content (Id INTEGER PRIMARY KEY, MainURL TEXT ,RenderURL TEXT, Caption TEXT ,Title TEXT,SubTitle TEXT,Descrition TEXT,Website TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PDOEXception $e){
			print new Exception($e->getMessage());
		}
		// $this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, X3D_URL, x3dCreationMethod) 
				VALUES (1, 'coke', 'Coca Cola X3D Model', '../application/assets/x3d/cokefinal.x3d','This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, X3D_URL, x3dCreationMethod) 
				VALUES (2, 'sprite', 'Sprite Bottle Model', '../application/assets/x3d/sprite.x3d','This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.'); " .
			"INSERT INTO Model_3D (Id, brand, x3dModelTitle, X3D_URL, x3dCreationMethod) 
				VALUES (3, 'pepper', 'Pepper Cup Model', '../application/assets/x3d/pepper4.x3d','This X3D model of the pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		// $this->dbhandle = NULL;
	}

	public function dbInsertContentData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Drink_content (Id, MainURL , RenderURL, Caption, Title,SubTitle,Descrition,Website ) 
				VALUES (1, '../application/assets/images/mainImage/coca_cola.jpg', '../application/assets/images/render_images/3D_coke.png', 'Coke can 3d image','History of Coca Cola','New York Harbour, 1886',
				'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special.',
				'http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola'); " .
			"INSERT INTO Drink_content (Id, MainURL , RenderURL, Caption, Title,SubTitle,Descrition,Website) 
				VALUES (2, '../application/assets/images/mainImage/sprite.jpg', '../application/assets/images/render_images/3D_sprite.png', 'Sprite Bottle image','History of Sprite','West Germany, 1959',
				'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.',
				'http://www.coca-cola.co.uk/drinks/sprite/sprite'); " .
			"INSERT INTO Drink_content (Id, MainURL , RenderURL, Caption, Title,SubTitle,Descrition,Website) 
				VALUES (3, '../application/assets/images/mainImage/dr_pepper.jpg', '../application/assets/images/render_images/3D_pepper.png', 'Pepper cup 3d image','History of Dr Pepper','Texas, 1885',
				'Dr Pepper is a unique, sparkling blend of 23 fruit flavours has been around for well over a century and it is still the same, with that distinctive flavour you just cannot quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.',
				'http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		// $this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['brand'] = $data['brand'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['X3D_URL'] = $data['X3D_URL'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				//increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		// $this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	public function dbgetContentdata() 
	{
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Drink_content';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($Contentdata = $stmt->fetch()) {
				$result[$i]['MainURL'] = $Contentdata['MainURL'];
				$result[$i]['RenderURL'] = $Contentdata['RenderURL'];
				$result[$i]['Caption'] = $Contentdata['Caption'];
				$result[$i]['Title'] = $Contentdata['Title'];
				$result[$i]['SubTitle'] = $Contentdata['SubTitle'];
				$result[$i]['Descrition'] = $Contentdata['Descrition'];
				$result[$i]['Website'] = $Contentdata['Website'];
				//increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		// $this->dbhandle = NULL;
		// Send the response back to the view
		return $result;

	}
	

}
?>