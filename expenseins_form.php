<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
            "Date"=>$_POST['Date'],

"Expense_Name"=>$_POST['Expense_Name'],

"Amount"=>$_POST['Amount'],

"Pay_Type"=>$_POST['Pay_Type'],
 
        ];
        if($obj->insert("expense",$data)==TRUE){
            echo "Data inserted successfully!";
			header("Location: https://veerasoftwareproject.in/hospital/expense.php?expense_success=true");
        } else {
            echo "Failed to insert data.";
        }
    // }
    
}
$obj->closeconnect();
?>
