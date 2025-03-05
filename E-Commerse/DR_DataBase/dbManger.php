<?php
class dbManger{

    private $host="localhost";
    private $name ="online_store";
    private $user="root";
    private $password="";
    private $conn;
    function __construct(){
        $dsn="mysql:host=$this->host;dbname=$this->name";
        try{
            $this->conn=new PDO($dsn,$this->user,$this->password);
        }catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }
    }
    function addCustomer($name,$email,$phone,$password,$role){
        $query="INSERT INTO customer (name,email,phone,password,role) 
        VALUES (:name,:email,:phone,:password,:role)";
        try {
            $stmt=$this->conn->prepare($query);
            $stmt->bindParam(':name',$name);    
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':phone',$phone);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':role',$role);
            $stmt->execute();

            return $result ? $this->conn->lastInsertId() : false;
        } catch (PDOexception $e) {
            echo "Error: ".$e->getMessage();
        }
    }


    function addAddress ($country,$city,$street){
        $query="INSERT INTO address (country,city,street) 
        VALUES (:country,:city,:street)";
        try {
            $stmt=$this->conn->prepare($query);
            $stmt->bindParam(':country',$country);    
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':street',$street);
            $stmt->execute();
            return $result ? $this->conn->lastInsertId() : false;
        } catch (PDOexception $e) {
            echo "Error: ".$e->getMessage();
        }
    }





}
?>