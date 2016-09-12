<?php 

/*define('SERVER', 'localhost');
define('DBNAME', 'valemobi');
define('USER', 'testeweb');
define('PASSWORD', 'vale1234');

try {
	$charset = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');
	$conn = new PDO("mysql:host=".SERVER."; dbname=".DBNAME, USER, PASSWORD, $charset);

	var_dump($conn);
} catch (PDOException $err) {
	echo 'Error message: ' . $err->getMessage() . "<br>";
	echo 'File name: ' . $err->getFile() . "<br>";
	echo 'Linha: ' . $err->getLine() . "<br>";
}*/

class DB {
	private $conn;
	public function __construct(){
		try {
			$this->conn = new PDO('mysql:dbname=valemobi;host=127.0.0.1', "testeweb", "vale1234");
			print_r($this->conn);
			
		} catch (PDOException $err) {
			echo 'Error message: ' . $err->getMessage() . "<br>";
			echo 'File name: ' . $err->getFile() . "<br>";
			echo 'Linha: ' . $err->getLine() . "<br>";
		}

	}

	public function insereMercadoria($tipo_mercadoria, $nome_mercadoria){
		$stmt = $this->conn->prepare("INSERT INTO mercadoria(tipo_mercadoria, nome_mercadoria) VALUES (:tipo_mercadoria, :nome_mercadoria)");
		$stmt->bindParam(':tipo_mercadoria', $tipo_mercadoria);
		$stmt->bindParam(':nome_mercadoria', $nome_mercadoria);
		$stmt->execute();
		return $this->conn->lastInsertId();
	}

	public function insereTransacao(){

	}

}

$db = new DB;
echo $db->insereMercadoria("derivativos", "boi gordo");
