<?php 
require("class_hospital.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
        $data = [
            "Vendor_Name" => $_POST['Vendor_Name'],
            "Bill_No" => $_POST['Bill_No'],
            "Bill_Date" => $_POST['Bill_Date'],
            "Machine" => $_POST['Machine'],
            "Quantity" => $_POST['Quantity'],
            "Price" => $_POST['Price'],
            "Upload_Image" => $_FILES['Upload_Image']['name'] // For file upload
        ];

        // Move uploaded file to a specific directory (optional, if file upload is needed)
        if (!empty($data['Upload_Image'])) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["Upload_Image"]["name"]);
            if (move_uploaded_file($_FILES["Upload_Image"]["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars(basename($_FILES["Upload_Image"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        // Call the insert method
        if ($obj->insert("vendor", $data) === TRUE) {
            echo "Data inserted successfully!";
        } else {
            echo "Failed to insert data.";
		}
    
    $obj->closeconnect(); // Close database connection
}
?>
