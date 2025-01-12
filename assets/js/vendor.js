document.addEventListener("DOMContentLoaded", () => {
    const confirmBtn = document.getElementById("confirmBtn");
    const tableBody = document.getElementById("tableBody");
    const totalAmountElement = document.getElementById("totalAmount");

    let serialNumber = 1; // To track the S.No.
    let totalAmount = 0;

    // Add row on Confirm button click
    confirmBtn.addEventListener("click", () => {
        const machine = document.getElementById("machine").value.trim();
        const quantity = parseFloat(document.getElementById("quantity").value);
        const price = parseFloat(document.getElementById("price").value);

        // Validate inputs
        if (!machine || isNaN(quantity) || quantity <= 0 || isNaN(price) || price <= 0) {
            alert("Please provide valid Machine, Quantity, and Price values.");
            return;
        }

        const total = quantity * price;
        totalAmount += total;

        // Create a new table row
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${serialNumber++}</td>
            <td>${machine}</td>
            <td>${quantity}</td>
            <td>${price.toFixed(2)}</td>
            <td>${total.toFixed(2)}</td>
            <td><button class="btn btn-danger btn-sm deleteBtn">Delete</button></td>
        `;

        // Append the row to the table body
        tableBody.appendChild(row);
        totalAmountElement.textContent = totalAmount.toFixed(2);

        // Reset input fields
        document.getElementById("machine").value = "";
        document.getElementById("quantity").value = "";
        document.getElementById("price").value = "";
    });

    // Use event delegation for delete functionality
    tableBody.addEventListener("click", (event) => {
        if (event.target.classList.contains("deleteBtn")) {
            const row = event.target.closest("tr");
            const totalCell = row.querySelector("td:nth-child(5)");
            const total = parseFloat(totalCell.textContent);

            // Update the total amount
            totalAmount -= total;
            totalAmountElement.textContent = totalAmount.toFixed(2);

            // Remove the row from the table
            row.remove();
        }
    });
});
