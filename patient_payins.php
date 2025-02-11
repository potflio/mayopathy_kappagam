<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
            "Patient_Code"=>$_POST['Patient_Code'],
            "Name"=>$_POST['Name'],
            "Date"=>$_POST['Date'],
            "Payment_Mode"=>$_POST['Payment_Mode'],
            "Amount"=>$_POST['Amount'], 
			"Payment_Desc"=>$_POST['Payment_Desc'],
			
			
        ];
	
	//echo "HIII".$_POST['Payment_Desc']; 
	
	//============================================ MONTHLY PENDING ============================================
	if($_POST['Payment_Desc']=="Monthly_Fee"){
				$Patient_Code = $_POST['Patient_Code'];
				$actual = $_POST['Actual_Amount'];
				$Paid = $_POST['Paid_Amount'];
				$new_paid = $Paid + $_POST['Amount'];
        if($obj->update("update patient set Paid_Monthly = $new_paid where Admission_No = '$Patient_Code'")==TRUE ){
           // echo "Data Update successfully!";
			//echo "update patient set Paid_Monthly = $new_paid where Admission_No = '$Patient_Code'";
			//header("Location: https://veerasoftwareproject.in/hospital/patient_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
	}else if($_POST['Payment_Desc']=="Machine"){
    
	//============================================ Machine PENDING [Paid update] ============================================
				$Patient_Code = $_POST['Patient_Code'];
				$actual = $_POST['Actual_Amount'];
				$Paid = $_POST['Paid_Amount'];
				$new_paid = $Paid + $_POST['Amount'];
        if($obj->update("update patient set Paid_Machine = $new_paid where Admission_No = '$Patient_Code'")==TRUE ){
            //echo "Data Update successfully!";
			//echo "update patient set Paid_Machine = $new_paid where Admission_No = '$Patient_Code'";
			header("Location: https://veerasoftwareproject.in/hospital/patient_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
	}//Machine if close
	
        if($obj->insert("patient_payment",$data)==TRUE ){
            echo "Data inserted successfully!";
			header("Location: https://veerasoftwareproject.in/hospital/patient_details.php?payment_success=true");
        } else {
            echo "Failed to insert data.";
        }
    // }
    
}
$obj->closeconnect();
?>
