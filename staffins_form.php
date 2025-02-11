<?php 
require("class_hospital.php");
// echo$_SERVER["REQUEST_METHOD"] ;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $obj = new Hospital();
     //if ($_POST['insert'] == "insert") {
        $data = [
            
           
            "Name"=>$_POST['Name'],
            "Designation"=>$_POST['Designation'],
			"Upload_Image"=>$_POST['Upload_Image'],
            "Age"=>$_POST['Age'],
            "Address"=>$_POST['Address'],
            "Sex"=>$_POST['Sex'],
            "Reference"=>$_POST['Reference'],
            "Qualification"=>$_POST['Qualification'],
 
        ];
	 
    if (isset($_FILES['Upload_Image']) && $_FILES['Upload_Image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'assets/images/';  
        $file_name = $_FILES['Upload_Image']['name'];
        $file_tmp = $_FILES['Upload_Image']['tmp_name'];
        $file_size = $_FILES['Upload_Image']['size'];
        $file_type = $_FILES['Upload_Image']['type'];
        $unique_file_name = time() . '_' . $file_name;
        $target_file = $upload_dir . $unique_file_name;
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif','image/jpg'];
        if (!in_array($file_type, $allowed_types)) {
            echo "Only JPEG, PNG, JPG and GIF files are allowed.";
            exit;
        }
        $max_size = 5 * 1024 * 1024;  // 5 MB
        if ($file_size > $max_size) {
            echo "File size exceeds the maximum limit of 5 MB.";
            exit;
        }
        if (move_uploaded_file($file_tmp, $target_file)) {
            $data['Upload_Image'] = $target_file;
            if ($obj->insert("staff", $data)) {
                echo "Data inserted successfully!";
                header("Location: https://veerasoftwareproject.in/hospital/staff_details.php?patient_success=true");
                exit(); 
            } else {
                echo "Failed to insert data.";
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "No image file uploaded or there was an error with the upload.";
    }
}

$obj->closeconnect();
?>
