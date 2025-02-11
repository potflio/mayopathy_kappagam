<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Sheet for ABC Ltd</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: #f8f9fa;
            /* Light background for contrast */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Modern font */
        }

        .container {
            margin: 40px auto;
            /* Center the container with space above and below */
            padding: 20px;
            /* Padding inside the container */
            background-color: #ffffff;
            /* White background for the table */
            border-radius: 12px;
            /* Rounded corners */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            /* Deeper shadow for depth */
            max-width: 1200px;
            /* Maximum width for larger screens */
        }

        h2 {
            margin-bottom: 30px;
            /* Space below the heading */
            font-weight: bold;
            /* Bold heading */
            color: #007bff;
            /* Primary color for heading */
            text-align: center;
            /* Center align heading */
            text-transform: uppercase;
            /* Uppercase for emphasis */
        }

        .table {
            border-collapse: collapse;
            /* Remove space between table cells */
            width: 100%;
            /* Full width */
        }

        .table th,
        .table td {
            padding: 12px;
            /* Padding inside table cells */
            text-align: center;
            /* Center align text */
            border: 1px solid #dee2e6;
            /* Light border for cells */
            transition: background-color 0.3s;
            /* Smooth transition for hover effect */
        }

        .table th {
            background-color: #007bff !important;
            /* Bootstrap primary color */
            color: white !important;
            /* White text for headers */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
            /* Light gray for even rows */
        }

        .table tbody tr:hover {
            background-color: #d1ecf1;
            /* Light blue on hover */
            cursor: pointer;
            /* Pointer cursor on hover */
        }

        .table tfoot th {
            background-color: #28a745;
            /* Bootstrap success color for totals */
            color: white;
            /* White text for totals */
            font-weight: bold;
            /* Bold text for totals */
        }

        .table tfoot td {
            font-weight: bold;
            /* Bold text for total amounts */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .table-container {
                overflow-x: auto;
                /* Allow horizontal scrolling */
                -webkit-overflow-scrolling: touch;
                /* Smooth scrolling on iOS */
            }

            .table {
                min-width: 600px;
                /* Set a minimum width for the table */
            }

            .table th,
            .table td {
                padding: 8px;
                /* Smaller padding on mobile */
                font-size: 0.85em;
                /* Smaller font size on mobile */
            }

            h2 {
                font-size: 1.5em;
                /* Adjust heading size on smaller screens */
            }
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h2 class="text-center text-primary">Balance Sheet</h2>
        <div class="table-container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Particular</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Particular</th>
                        <th scope="col">Amount</th>
                                            </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Opening Balance</td>
                        <td>0.00</td>
                       
                        <td>Salary</td>
                        <td>0.00</td>
                        
                    </tr>
                    <tr>
                        <td>Inpatient Previous Month Balance</td>
                        <td>0.00</td>
                       
                        <td>Machine Materials</td>
                        <td>0.00</td>
                        
                    </tr>
                    <tr>
                        <td>Outpatient Previous Month Balance</td>
                        <td>0.00</td>
                       
                        <td>Vendor Payment</td>
                        <td>0.00</td>
                      
                    </tr>
                    <tr>
                        <td>Inpatient Income</td>
                        <td>0.00</td>
                       
                        <td>Office Expenses</td>
                        <td>0.00</td>
                       
                    </tr>
                    <tr>
                        <td>Outpatient Income</td>
                        <td>0.00</td>
                        
                        <td>Salary Advance</td>
                        <td>0.00</td>
                        
                    </tr>
                    <tr>
                        <td>Machine Income</td>
                        <td>0.00</td>
                       
                        <td>Other Branch Expenses</td>
                        <td>0.00</td>
                       
                    </tr>
                    <tr>
                        <td>Fitting/Accessories of Machine</td>
                        <td>0.00</td>
                       
                        <td>Admin Expenses</td>
                        <td>0.00</td>
                       
                    </tr>
                    <tr>
                        <td>Consulting Fees</td>
                        <td>0.00</td>
                       
                        <td>MD Expenses</td>
                        <td>0.00</td>
                       
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total Amount</th>
                        <th>0.00</th>
                        
                        <th>Total Amount</th>
                        <th>0.00</th>
                        
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>

</html>