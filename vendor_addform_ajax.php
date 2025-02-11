<?php
require("class_hospital.php");
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //  if (isset($_POST['data'])) 
        $servername = "localhost";
        $username = "user_hospital";
        $password = "xLz86d4^5";
        $db = "vimpexco_hospital";
        $conn = new mysqli($servername, $username, $password, $db);
        $data = $_GET['data'];
        $Bill_No2=$_GET['Bill_No'];
        $vendorName=$_GET['vendorName'];
        $billDate=$_GET['billDate'];
        $mobileNo=$_GET['mobileNo'];
      //  $hospital = new Hospital();
       // $conn = $hospital->conn;  
        foreach ($data as $array) {
            $Bill_No = $array['Bill_No'];
            $Machine = $array['Machine'];
            $Quantity = $array['Quantity'];
            $Price = $array['Price'];

            // Prepare the SQL query (to prevent SQL injection)
            $sql = "INSERT INTO vendor (Vendor_Name, Mobile_Number, Bill_No, Bill_Date, Machine, Quantity, Price) VALUES ('$vendorName', '$mobileNo',  '$Bill_No2', '$billDate', '$Machine', '$Quantity', '$Price')";
echo"$sql";
            // Execute the query
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Inserted successfully!";
				header("Location: https://veerasoftwareproject.in/hospital/vendor_details.php?patient_success=true");
            } else {
                echo "Failed to insert: " . mysqli_error($conn);
            }
        }

        
   // }
	//else {
       // echo "No data received.";
  //  }
//} 
//else {
    //echo "Invalid request.";
//}
?>
