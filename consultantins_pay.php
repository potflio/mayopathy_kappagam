<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
            "Consultator_Code"=>$_POST['Consultator_Code'],
            "Name"=>$_POST['Name'],
            "Date"=>$_POST['Date'],
            "Payment_Mode"=>$_POST['Payment_Mode'],
            "Amount"=>$_POST['Amount'],
 
        ];
        if($obj->insert("consultant_payment",$data)==TRUE){
            echo "Data inserted successfully!";
			header("Location: https://veerasoftwareproject.in/hospital/consultation_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
    // }
    
}
$obj->closeconnect();
?>
