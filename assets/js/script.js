function downloadExcel() {
    // Select the table
    const table = document.querySelector("table");

    // Create a new workbook
    const wb = XLSX.utils.table_to_book(table, { sheet: "Data" });

    // Generate Excel file and prompt user to download
    XLSX.writeFile(wb, "Data.xlsx");
}

function downloadPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.autoTable({ html: '#myTable' });

    doc.save('table.pdf');
}


let rowsPerPage = 10; // Number of rows to display per page

function filterTable() {
    const input = document.getElementById('search'); // Search input
    const filter = input.value.toLowerCase(); // Convert search value to lowercase
    const table = document.getElementById('myTable'); // Table body
    const rows = table.getElementsByTagName('tr'); // Get all rows

    let filteredRows = []; // Array to store filtered rows

    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName('td'); // Get all cells in a row
        let found = false;

        // Check if any cell in the row matches the search input
        for (let j = 0; j < cells.length; j++) {
            if (cells[j].innerText.toLowerCase().includes(filter)) {
                found = true;
                break;
            }
        }

        // Show or hide the row based on the match
        rows[i].style.display = found ? '' : 'none';

        // Add visible rows to the filtered array
        if (found) {
            filteredRows.push(rows[i]);
        }
    }

    // Reset pagination if the search is cleared
    if (filter === '') {
        filteredRows = Array.from(rows); // Reset to all rows
    }

    // Update pagination for filtered rows
    setupPagination(filteredRows);
}

// Function to handle pagination
function setupPagination(rows) {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = ''; // Clear existing pagination

    const pageCount = Math.ceil(rows.length / rowsPerPage);
    for (let i = 1; i <= pageCount; i++) {
        const pageLink = document.createElement('li');
        pageLink.className = 'page-item';
        pageLink.innerHTML = `<a class="page-link" href="#">${i}</a>`;
        pageLink.addEventListener('click', () => showPage(i, rows));
        pagination.appendChild(pageLink);
    }

    // Show the first page by default
    showPage(1, rows);
}

// Function to display rows for the selected page
function showPage(page, rows) {
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    rows.forEach((row, index) => {
        row.style.display = index >= start && index < end ? '' : 'none';
    });
}

// Initialize pagination on page load
document.addEventListener('DOMContentLoaded', () => {
    const rows = Array.from(document.getElementById('myTable').getElementsByTagName('tr'));
    setupPagination(rows);

    // Add event listener for search
    document.getElementById('search').addEventListener('input', filterTable);
});