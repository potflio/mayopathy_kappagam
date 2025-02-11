document.addEventListener("DOMContentLoaded", () => {
    const confirmBtn = document.getElementById("confirmBtn");
    const billNoInput = document.getElementById("billNo");
    const machineInput = document.getElementById("machine");
    const quantityInput = document.getElementById("quantity");
    const priceInput = document.getElementById("price");
    const narrator = document.getElementById("narrator");
    const tableBody = document.getElementById("tableBody");
    const totalAmount = document.getElementById("totalAmount");

    let serialNumber = 1;
    let total = 0;
    let editingRow = null; // To track if editing an existing row

    confirmBtn.addEventListener("click", () => {
        const billNo = billNoInput.value.trim();
        const machine = machineInput.value.trim();
        const quantity = parseInt(quantityInput.value, 10);
        const price = parseFloat(priceInput.value);
        const narration = narrator.value.trim();

        if (billNo !== "" && machine !== "" && !isNaN(quantity) && !isNaN(price)) {
            const totalRowPrice = quantity * price;
            total += totalRowPrice;

            if (editingRow) {
                // Update existing row instead of adding a new one
                editingRow.children[1].textContent = billNo;
                editingRow.children[2].textContent = machine;
                editingRow.children[3].textContent = narration;
                editingRow.children[4].textContent = quantity;
                editingRow.children[5].textContent = price.toFixed(2);
                editingRow.children[6].textContent = totalRowPrice.toFixed(2);
                editingRow = null; // Reset editingRow
            } else {
                // Add a new row if not editing
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${serialNumber++}</td>
                    <td>${billNo}</td>
                    <td>${machine}</td>
                    <td>${narration}</td>
                    <td>${quantity}</td>                    
                    <td>${price.toFixed(2)}</td>
                    <td>${totalRowPrice.toFixed(2)}</td>
                    <td><i class="bi bi-pencil-square edit-btn text-primary" style="cursor: pointer;"></i></td>
                    <td><i class="bi bi-trash delete-btn text-danger" style="cursor: pointer;"></i></td>
                `;

                tableBody.appendChild(row);
                attachEventListeners(row);
            }

            totalAmount.textContent = total.toFixed(2);

            // Clear inputs
            billNoInput.value = "";
            machineInput.value = "";
            quantityInput.value = "";
            priceInput.value = "";
            narrator.value = "";
        } else {
            alert("Please fill in all fields with valid data.");
        }
    });

    function attachEventListeners(row) {
        const editBtn = row.querySelector(".edit-btn");
        const deleteBtn = row.querySelector(".delete-btn");

        // Edit Functionality
        editBtn.addEventListener("click", () => {
            const cells = row.children;

            billNoInput.value = cells[1].textContent;
            machineInput.value = cells[2].textContent;
            narrator.value = cells[3].textContent;
            quantityInput.value = cells[4].textContent;
            priceInput.value = cells[5].textContent;

            total -= parseFloat(cells[6].textContent); // Deduct from total
            totalAmount.textContent = total.toFixed(2);

            editingRow = row; // Store the row being edited
        });

        // Delete Functionality
        deleteBtn.addEventListener("click", () => {
            total -= parseFloat(row.children[6].textContent);
            totalAmount.textContent = total.toFixed(2);
            row.remove();
            updateSerialNumbers();
        });
    }

    function updateSerialNumbers() {
        let rows = tableBody.getElementsByTagName("tr");
        serialNumber = 1; // Reset serial number

        for (let row of rows) {
            row.children[0].textContent = serialNumber++;
        }
    }
});
