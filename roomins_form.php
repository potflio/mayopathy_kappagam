<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
			"Patient_Code"=>$_POST['Patient_Code'],
            "Room_No"=>$_POST['Room_No'],
            "Person_Name"=>$_POST['Person_Name'],
            "Open_Date"=>$_POST['Open_Date'],
            "Discharge_Date"=>$_POST['Discharge_Date'],
            "Room_Type"=>$_POST['Room_Type'],
            "Comments"=>$_POST['Comments'],
            "Amount"=>$_POST['Amount'],
			"Advanced_Amount"=>$_POST['Advanced_Amount'],
			"paid"=>$_POST['Advanced_Amount'],
			"Booking_Status" => "Booked",
 
        ];
	
        if($obj->insert("room",$data)==TRUE){
            echo "Data inserted successfully!";
					header("Location: https://veerasoftwareproject.in/hospital/room_details.php?patient_success=true");
        } else {
            echo "Failed to insert data.";
        }
	
    // }
    
}
$obj->closeconnect();
?>
