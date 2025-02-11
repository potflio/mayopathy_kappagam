<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
            "Patient_Code"=>$_POST['Patient_Code'],
            "Name"=>$_POST['Name'],
            "Amount"=>$_POST['Amount'],
			"Room_No"=>$_POST['Room_No'],
			"Payment_Mode"=>$_POST['Payment_Mode'],
			"Date"=>$_POST['Date'],
			"Actual_Amount"=>$_POST['Actual_Amount'],

 
        ];
	//"paid"=>$_POST['paid'],
        if($obj->insert("room_payment",$data)==TRUE){
            echo "Data inserted successfully!";
						header("Location: https://veerasoftwareproject.in/hospital/room_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
	$Patient_Code=$_POST['Patient_Code'];
	$oldpaid=$_POST['paid'];
	$currentpaid=$_POST['Amount'];
	$newpaid=$oldpaid+$currentpaid;
	//echo "UPDATE room SET paid='$newpaid' WHERE Patient_Code='$Patient_Code'";
	if($obj->update("UPDATE room SET paid='$newpaid' WHERE Patient_Code='$Patient_Code'")==TRUE){
            echo "Data inserted successfully!";
						header("Location: https://veerasoftwareproject.in/hospital/room_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
   //}   
}
$obj->closeconnect();
?>
