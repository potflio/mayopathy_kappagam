<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
    // if ($_POST['insert'] == "insert") {
        $data = [
            "Consultation_No"=>$_POST['Consultation_No'],
            "Patient_Name"=>$_POST['Patient_Name'],
            "Father_Name"=>$_POST['Father_Name'],
            "Patient_Date_of_Birth"=>$_POST['Patient_Date_of_Birth'],
            "Patient_Age"=>$_POST['Patient_Age'], 
            "Communication_Address"=>$_POST['Communication_Address'],
             "Mobile_Number"=>$_POST['Mobile_Number'],
            "Alternative_Number"=>$_POST['Alternative_Number'], 
            "Email_ID"=>$_POST['Email_ID'],
             "Consultation_Fee"=>$_POST['Consultation_Fee'], 
             "Admission_No"=>$_POST['Admission_No'], 
             "Consultation_Date"=>$_POST['Consultation_Date'], 
             "Reference"=>$_POST['Reference'],
              "Diagnosis"=>$_POST['Diagnosis'],
               "Followup_Date_1"=>$_POST['Followup_Date_1'],
            "Followup_Date_2"=>$_POST['Followup_Date_2'], 
            "Followup_Date_3"=>$_POST['Followup_Date_3'], 
            "Followup_Date_4"=>$_POST['Followup_Date_4'],
             "Preferred_Admission_Date"=>$_POST['Preferred_Admission_Date'], 
             "Mode_of_Payment"=>$_POST['Mode_of_Payment'],
        ];
        if($obj->insert("consultant",$data)==TRUE){
            echo "Data inserted successfully!";
						header("Location: https://veerasoftwareproject.in/hospital/consultation_details.php?patient_success=true");
        } else {
            echo "Failed to insert data.";
        }
     //}
    
}
$obj->closeconnect();
?>
