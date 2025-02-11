// document.getElementById('expenseForm').addEventListener('submit', function (e) {
//     e.preventDefault();

//     // Get form data
//     const sno = document.getElementById('sno').value;
//     const date = document.getElementById('date').value;
//     const expenseName = document.getElementById('expenseName').value;
//     const amount = document.getElementById('amount').value;
//     const payType = document.getElementById('payType').value;

//     // Append data to table
//     const tableBody = document.getElementById('tableBody');
//     const row = document.createElement('tr');
//     row.innerHTML = `
//         <td>${sno}</td>
//         <td>${date}</td>
//         <td>${expenseName}</td>
//         <td>${amount}</td>
//         <td>${payType}</td>
//     `;
//     tableBody.appendChild(row);

//     // Reset form fields
//     document.getElementById('expenseForm').reset();
// });