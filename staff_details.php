<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Staff Details</h2>
        <div class="text-end mb-3">
            <a href="staff_add_form.php" class="btn btn-primary">+ADD NEW</a>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="col-4">
                <input type="text" id="search" class="form-control" placeholder="Search by name..." oninput="filterTable()">
            </div>
            <button class="btn btn-success" onclick="downloadExcel()">Download Excel</button>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="staff-table">
                <thead class="table-success">
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Profile</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>28</td>
                        <td>Software Engineer</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>32</td>
                        <td>Project Manager</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mike Johnson</td>
                        <td>45</td>
                        <td>Team Lead</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Emily Brown</td>
                        <td>29</td>
                        <td>Data Analyst</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Chris Evans</td>
                        <td>37</td>
                        <td>HR Manager</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Lisa White</td>
                        <td>26</td>
                        <td>Graphic Designer</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>David Wilson</td>
                        <td>41</td>
                        <td>Marketing Head</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Sarah Miller</td>
                        <td>34</td>
                        <td>Operations Manager</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Tom Hardy</td>
                        <td>38</td>
                        <td>Product Manager</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Susan King</td>
                        <td>30</td>
                        <td>Content Writer</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>James Moore</td>
                        <td>33</td>
                        <td>DevOps Engineer</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Anna Lee</td>
                        <td>27</td>
                        <td>UI/UX Designer</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Robert Taylor</td>
                        <td>42</td>
                        <td>System Administrator</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Karen Scott</td>
                        <td>35</td>
                        <td>Business Analyst</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Andrew Baker</td>
                        <td>31</td>
                        <td>Technical Support</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Rachel Adams</td>
                        <td>29</td>
                        <td>Recruiter</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>Matthew Green</td>
                        <td>39</td>
                        <td>Quality Analyst</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>Victoria Young</td>
                        <td>36</td>
                        <td>Accountant</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>Steven Hall</td>
                        <td>40</td>
                        <td>Security Officer</td>
                        <td>Male</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>Jessica Brown</td>
                        <td>25</td>
                        <td>Intern</td>
                        <td>Female</td>
                        <td><a href="staff_profile.php" class="btn btn-sm btn-primary">View</a></td>
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
<script src="assets/js/staff_details.js"></script>

</html>