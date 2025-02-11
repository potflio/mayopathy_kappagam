<?php
class Hospital{
    private $connection;
    
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "vimpexco_hospital";
        $this->connection = new mysqli($servername, $username, $password, $db);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function insert($table,$data){
        $column = implode(',',array_keys($data));
        $values = "'".implode("','",array_values($data))."'";
        $sql = "INSERT INTO $table($column) VALUES($values)";
        if($this->connection->query($sql)==TRUE){
            return "success";
        }else{
            return"Error";
        }
       
    }  
 
    public function update($qr){
        //$column = implode(',',array_keys($data));
        //$values = "'".implode("','",array_values($data))."'";
        //$sql = "INSERT INTO $table($column) VALUES($values)";
        if($this->connection->query($qr)==TRUE){
            return "success";
        }else{
            return"Error";
        }
       
    }  	
	

    public function full_display($table){
        $sql = "SELECT * FROM $table";
        $result = $this->connection->query($sql);
        $users = [];
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $users[] = $row;
            }
        }
        return $users;

    }
	
    public function full_display_qr($qr){
       // $sql = "SELECT * FROM $table";
        $result = $this->connection->query($qr);
        $users = [];
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $users[] = $row;
            }
        }
        return $users;

    }	
	
    public function single_display($qr){
            // $sql = "SELECT* FROM $table WHERE id = '$id'";
            $result = $this->connection->query($qr);
            if($result->num_rows==1){
                return $result->fetch_assoc();
            }else{
                return"ERROR";
            }
    }

    public function join_table($table) {   
        $sql = "
        SELECT p.id, p.Patient_Name, p.Diagnosis, p.Fees, patient_payment.Amount FROM patient p LEFT JOIN patient_payment ON p.id = patient_payment.id";
        $result = $this->connection->query($sql);
        $patients = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $patients[] = $row;
            }
        }
        return $patients;
    }

    public function closeconnect() {
        $this->connection->close();
    }   

}