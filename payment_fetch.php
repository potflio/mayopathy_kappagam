<?php
require("class_hospital.php");
$patient_arr = [];
$Admission_No=$_GET['Admission_No'];
$Payment_Desc=$_GET['Payment_Desc'];
$obj = new Hospital();
if($Payment_Desc == 'Monthly_Fee'){	
//echo"SELECT Paid_Monthly FROM patient where Admission_No='$Admission_No'".$Payment_Desc;
$patient=$obj->single_display("SELECT Paid_Monthly,Monthly_Fees FROM patient where Admission_No='$Admission_No'");
$patient_arr['Paid_Amount']=$patient['Paid_Monthly'];
$patient_arr['Actual_Amount']=$patient['Monthly_Fees'];
}elseif($Payment_Desc == 'Machine'){
$patient=$obj->single_display("SELECT Paid_Machine,Machine FROM patient where Admission_No='$Admission_No'");
//echo "SELECT Paid_Machine,Machine FROM patient where Admission_No='$Admission_No'";	
$patient_arr['Paid_Amount']=$patient['Paid_Machine'];
$patient_arr['Actual_Amount'] = $patient['Machine'];
}
echo json_encode($patient_arr);
?>