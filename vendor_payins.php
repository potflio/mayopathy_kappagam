<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
            "Date"=>$_POST['Date'],
            "Name"=>$_POST['Name'],
            "Propose_of"=>$_POST['Propose_of'],
            "Department"=>$_POST['Department'],
            "In_Words"=>$_POST['In_Words'],
            "Amount"=>$_POST['Amount'],
 
        ];
        if($obj->insert("vendor_payment",$data)==TRUE){
            echo "Data inserted successfully!";
			header("Location: https://veerasoftwareproject.in/hospital/vendor_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
    // }
    
}
$obj->closeconnect();
?>
