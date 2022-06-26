<?php

class Config{
    private $host = "localhost"; //Database host
    private $username = "root"; //Database username
    private $password = ""; //Database password
    private $dbName = "pietrodb461"; //Your Database name
    protected $conn;

    private $id;
    private $firstName;
    private $lastName;
    private $address;
    

    public function __construct($id=0,$firstName="",$lastName="",$address=""){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;

        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbName;", $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    //Getters and Setters:
    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getAddress(){
        return $this->address;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setAddress($address){
        $this->address = $address;
    }

    
    //CRUD:
    public function insertData(){ // INSERT
        try{

            $stmt = $this->conn->prepare("INSERT INTO pessoas(firstName, lastName, address) VALUES(?,?,?)");
            $stmt->execute([$this->firstName,$this->lastName,$this->address]);

            echo "<script>alert('data saved successfully');document.location='index.php'</script>";

        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchAll(){ // FETCH ALL
        try{

            $stmt = $this->conn->prepare("SELECT * FROM pessoas");
            $stmt->execute();
            return $stmt->fetchAll();

        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function fetchOne(){ // FETCH ONE
        try{

            $stmt = $this->conn->prepare("SELECT FROM pessoas WHERE id = ?");
            $stmt->execute([$this->id]);
            return $stmt->fetchAll();

        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function update(){ // UPDATE
        try{

            $stmt = $this->conn->prepare("UPDATE pessoas SET firstName = ? , lastName = ? , address = ? WHERE id = ?");
            $stmt->execute([$this->firstName,$this->lastName,$this->address,$this->id]);

        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function delete(){ // DELETE
        try{

            $stmt = $this->conn->prepare("DELETE FROM pessoas WHERE id = ?");
            $stmt->execute([$this->id]);
            return $stmt->fetchAll();

            echo "<script>alert('data deleted successfully');document.location='index.php'</script>";

        }catch(Exception $e){
            return $e->getMessage();
        }
    }

}