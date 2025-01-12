<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultater Profile</title>
   <?php include 'navbar.php'; ?>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 20px;
        }
        .profile-info p {
            margin: 5px 0;
        }
        .profile-info strong {
            color: #343a40;
        }
        .highlight {
            font-weight: bold;
            color: #0d6efd;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary mb-5">Consultater Profile</h2>
        <div class="profile-card mx-auto">
            <div class="row">
                <!-- Personal Information -->
                <div class="col-md-6 mb-4">
                    <div class="section-title">Personal Information</div>
                    <div class="profile-info">
                        <p><strong>Consultation No:</strong> <span class="highlight">10245</span></p>
                        <p><strong>Patient Name:</strong> Mr. Arjun Kumar</p>
                        <p><strong>Father Name:</strong> Mr. Ramesh Kumar</p>
                        <p><strong>Date of Birth:</strong> 15-Aug-1990</p>
                        <p><strong>Age:</strong> 34</p>
                        <p><strong>Communication Address:</strong> 25, Lakshmi Nagar, Chennai, Tamil Nadu, India</p>
                        <p><strong>Mobile Number:</strong> +91-9876543210</p>
                        <p><strong>Alternative Number:</strong> +91-8765432109</p>
                        <p><strong>Email ID:</strong> arjunkumar90@example.com</p>
                    </div>
                </div>
                <!-- Consultation Information -->
                <div class="col-md-6 mb-4">
                    <div class="section-title">Consultation Information</div>
                    <div class="profile-info">
                        <p><strong>Admission No:</strong> <span class="highlight">ADM20241245</span></p>
                        <p><strong>Consultation Date:</strong> 20-Dec-2024</p>
                        <p><strong>Reference:</strong> Dr. Kavita Mehta</p>
                        <p><strong>Diagnosis:</strong> Early-stage Myopathy</p>
                        <p><strong>Followup Date 1:</strong> 27-Dec-2024</p>
                        <p><strong>Followup Date 2:</strong> 05-Jan-2025</p>
                        <p><strong>Followup Date 3:</strong> 10-Jan-2025</p>
                        <p><strong>Followup Date 4:</strong> 20-Jan-2025</p>
                        <p><strong>Preferred Admission Date:</strong> 01-Feb-2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>
