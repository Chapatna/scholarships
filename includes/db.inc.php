<?php
/* Connect To Database Using PDO In OOP PHP */

class ConnDB {
private $servername;
private $username;
private $password;
private $dbname;
private $charset;

public function connect() {
    $this->servername = "localhost";
    $this->username = "conn_blueiam";
    $this->password = "kSX17nmL9TzXxozQ";
    $this->dbname = "orange2blue";
    $this->charset = "utf8";

    try {

        $conn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
        $pdo = new PDO($conn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    } catch (PDOException $e){
        echo "Connection Failed: ".$e->getMessage();

    }
}

}
?>