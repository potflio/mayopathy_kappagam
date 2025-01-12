<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'navbar.php'; ?>
</head>

<body>
    <div class="container">
        <h2 class="text-center text-success mt-4">Room Details</h2>
        <div class="text-end mb-3">
            <a href="room_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle text-center">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Room No</th>
                        <th scope="col">Person Name</th>
                        <th scope="col">Open Date</th>
                        <th scope="col">Discharge Date</th>
                        <th scope="col">Room Type</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <tr>
            <td>1</td>
            <td>101</td>
            <td>John Doe</td>
            <td>2025-01-01</td>
            <td>2025-01-05</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>2</td>
            <td>102</td>
            <td>Jane Smith</td>
            <td>2025-01-02</td>
            <td>2025-01-06</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>3</td>
            <td>103</td>
            <td>Robert Brown</td>
            <td>2025-01-03</td>
            <td>2025-01-07</td>
            <td>Suite</td>
            <td>$300</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>4</td>
            <td>104</td>
            <td>Emily Clark</td>
            <td>2025-01-04</td>
            <td>2025-01-08</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>5</td>
            <td>105</td>
            <td>Michael Davis</td>
            <td>2025-01-05</td>
            <td>2025-01-09</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>6</td>
            <td>106</td>
            <td>Sarah Wilson</td>
            <td>2025-01-06</td>
            <td>2025-01-10</td>
            <td>Suite</td>
            <td>$300</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>7</td>
            <td>107</td>
            <td>Chris Johnson</td>
            <td>2025-01-07</td>
            <td>2025-01-11</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>8</td>
            <td>108</td>
            <td>Jessica Lee</td>
            <td>2025-01-08</td>
            <td>2025-01-12</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>9</td>
            <td>109</td>
            <td>Daniel Martinez</td>
            <td>2025-01-09</td>
            <td>2025-01-13</td>
            <td>Suite</td>
            <td>$300</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>10</td>
            <td>110</td>
            <td>Laura Garcia</td>
            <td>2025-01-10</td>
            <td>2025-01-14</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>11</td>
            <td>111</td>
            <td>Tom Harris</td>
            <td>2025-01-11</td>
            <td>2025-01-15</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>12</td>
            <td>112</td>
            <td>Anna Moore</td>
            <td>2025-01-12</td>
            <td>2025-01-16</td>
            <td>Suite</td>
            <td>$300</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>13</td>
            <td>113</td>
            <td>Henry White</td>
            <td>2025-01-13</td>
            <td>2025-01-17</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>14</td>
            <td>114</td>
            <td>Olivia Hall</td>
            <td>2025-01-14</td>
            <td>2025-01-18</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>15</td>
            <td>115</td>
            <td>James Allen</td>
            <td>2025-01-15</td>
            <td>2025-01-19</td>
            <td>Suite</td>
            <td>$300</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>16</td>
            <td>116</td>
            <td>Grace Young</td>
            <td>2025-01-16</td>
            <td>2025-01-20</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>17</td>
            <td>117</td>
            <td>David King</td>
            <td>2025-01-17</td>
            <td>2025-01-21</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>18</td>
            <td>118</td>
            <td>Sophia Green</td>
            <td>2025-01-18</td>
            <td>2025-01-22</td>
            <td>Suite</td>
            <td>$300</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
        <tr>
            <td>19</td>
            <td>119</td>
            <td>Ethan Adams</td>
            <td>2025-01-19</td>
            <td>2025-01-23</td>
            <td>Single</td>
            <td>$100</td>
            <td><span class="badge bg-success">Active</span></td>
        </tr>
        <tr>
            <td>20</td>
            <td>120</td>
            <td>Amelia Scott</td>
            <td>2025-01-20</td>
            <td>2025-01-24</td>
            <td>Double</td>
            <td>$200</td>
            <td><span class="badge bg-danger">Deathline</span></td>
        </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <nav aria-label="Page navigation example">
                <ul id="pagination" class="pagination">
                    <!-- Pagination will be dynamically generated -->
                </ul>
            </nav>
        </div>
    </div>
</body>
<script src="assets/js/room_details.js"></script>
</html>