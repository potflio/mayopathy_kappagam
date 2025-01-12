    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="assets/js/script.js"></script>
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: rgb(255, 255, 255);
            color: rgb(255, 255, 255);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 10px 0;
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
            /* Ensure sidebar is above content */
        }

        .sidebar a {
            text-decoration: none;
            color: black;
            padding: 10px 20px;
            margin: 5px 0;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: rgb(0, 128, 255);
            border-radius: 5px;
            color: white;
        }

        .sidebar i {
            margin-right: 10px;
        }

        .toggle-btn {
            display: none;
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgb(255, 255, 255);
            color: black;
            border: none;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
            z-index: 1100;
            /* Ensure button is above sidebar */
        }

        .toggle-btn:focus {
            outline: none;
        }

        /* By default, hide sidebar for smaller screens */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .toggle-btn {
                display: block;
            }
        }
    </style>

    <body>
        <nav class="navbar navbar-light bg-light shadow-sm stick-top">
            <div class="container-fluid text-center">
                <div class="mx-auto">
                    <div class="d-flex flex-column align-items-center">
                        <img src="assets/images/fav.png" alt="Logo" class="rounded-circle mb-2" style="width: 60px; height: 60px;">
                        <div class="d-flex justify-content-center align-items-center">
                            <h3 class="navbar-brand mb-0 fw-bold text-primary me-2">MYOPATHY</h3>
                            <h3 class="navbar-brand mb-0 fw-bold text-success">KAPPAGAM</h3>
                        </div>
                    </div>
                    <h6 class="text-secondary mt-2">Institute of Cerebral Palsy & Muscular Dystrophy Center</h6>
                    <h6 class="text-muted">(A unit of Myopathy Kappagam)</h6>
                </div>
            </div>
        </nav>

        <button class="toggle-btn" onclick="toggleSidebar()"><i class="bi bi-list"></i></button>

        <div class="sidebar" id="sidebar">
            <a href=""></a>
            <a href="main_dashboard.php"><i class="bi bi-grid-fill text-success"></i> Dashboard</a>
            <a href="consultation_details.php"><i class="bi bi-file-medical-fill text-info"></i> Consultation</a>
            <a href="patient_details.php"><i class="bi bi-person-fill text-warning"></i> Patient</a>
            <a href="vendor_details.php"><i class="bi bi-truck-front-fill text-secondary"></i> Vendor</a>
            <a href="room_details.php"><i class="bi bi-building-fill text-danger"></i> Rooms</a>
            <a href="staff_details.php"><i class="bi bi-people-fill text-primary"></i> Staff</a>
            <a href="expense.php"><i class="bi bi-cash-coin text-success"></i> Expense</a>
            <a href="fee.php"><i class="bi bi-receipt-cutoff text-info"></i> Fee</a>
            <a href="reminder.php"><i class="bi bi-bell-fill text-warning"></i> Reminder</a>
            <a href="daybook.php"><i class="bi bi-calendar-event-fill text-secondary"></i> DayBook</a>
            <a href="balance_sheet.php"><i class="bi bi-graph-up text-danger"></i> Balance Sheet</a>
        </div>



        <script>
            function toggleSidebar() {
                const sidebar = document.getElementById('sidebar');
                sidebar.classList.toggle('active');
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.2/xlsx.full.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>