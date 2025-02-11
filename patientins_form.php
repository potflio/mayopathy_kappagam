<?php 
require("class_hospital.php");

$obj = new Hospital();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $data = [
        "Consultation_No" => htmlspecialchars($_POST['Consultation_No']),
        "Patient_Name" => htmlspecialchars($_POST['Patient_Name']),
        "Father_Name" => htmlspecialchars($_POST['Father_Name']),
        "Patient_Date_of_Birth" => htmlspecialchars($_POST['Patient_Date_of_Birth']),
        "Patient_Age" => htmlspecialchars($_POST['Patient_Age']),
        "Communication_Address" => htmlspecialchars($_POST['Communication_Address']),
        "Mobile_Number" => htmlspecialchars($_POST['Mobile_Number']),
        "Alternative_Number" => htmlspecialchars($_POST['Alternative_Number']),
        "Email_ID" => htmlspecialchars($_POST['Email_ID']),
        "Aadhar_Number" => htmlspecialchars($_POST['Aadhar_Number']),
        "Smart_Card_Number" => htmlspecialchars($_POST['Smart_Card_Number']),
        "Disability_Card_Number" => htmlspecialchars($_POST['Disability_Card_Number']),
        "UDID_Card_Number" => htmlspecialchars($_POST['UDID_Card_Number']),
        "Physiotherapist_Name" => htmlspecialchars($_POST['Physiotherapist_Name']),
        "Trainer_Name" => htmlspecialchars($_POST['Trainer_Name']),
        "Kattu_Person_Name" => htmlspecialchars($_POST['Kattu_Person_Name']),
        "Admission_No" => htmlspecialchars($_POST['Admission_No']),
        "Consultation_Date" => htmlspecialchars($_POST['Consultation_Date']),
        "Reference" => htmlspecialchars($_POST['Reference']),
        "Diagnosis" => htmlspecialchars($_POST['Diagnosis']),
        "Machine_Size" => htmlspecialchars($_POST['Machine_Size']),
        "Chest_Belt_Size" => htmlspecialchars($_POST['Chest_Belt_Size']),
        "LS_Belt_Size" => htmlspecialchars($_POST['LS_Belt_Size']),
        "Monthly_Fees" => htmlspecialchars($_POST['Monthly_Fees']),
        "Fees" => htmlspecialchars($_POST['Fees']),
        "Machine" => htmlspecialchars($_POST['Machine']),
        "Belt" => htmlspecialchars($_POST['Belt']),
        "File_Amount" => htmlspecialchars($_POST['File_Amount']),
        "Paid_Amount" => htmlspecialchars($_POST['Paid_Amount']),
        "Mode_of_Payment" => htmlspecialchars($_POST['Mode_of_Payment']),
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
            if ($obj->insert("patient", $data)) {
                echo "Data inserted successfully!";
                header("Location: https://veerasoftwareproject.in/hospital/patient_details.php?patient_success=true");
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
