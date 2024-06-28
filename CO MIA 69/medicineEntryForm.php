<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicine Entry Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="medicineEntryForm.css">
</head>
<body>
<header>
    <nav class="section__container nav__container">
        <div class="nav__logo">SUSHRU<span>TARTHIYA</span></div>
        <img src="logo.png" alt="Logo" class="nav__logo-img">
    </nav>
    <div class="section__container header__container">
        <div class="header__content">
            <h1>Medicine Entry Form</h1>
            <p>Please provide the following details to enter new medicine stock.</p>
        </div>
    </div>
</header>

<div class="section__container form-container">
    <form class="admission-form" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">
        <h3>Supplier Details</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="supplier-id">Supplier ID</label>
                <input type="text" id="supplier-id" name="supplier_id" placeholder="To be auto-generated" disabled>
            </div>
            <div class="form-group">
                <label for="supplier-name">Supplier Name</label>
                <input type="text" id="supplier-name" name="supplier_name" placeholder="To be auto-generated" disabled>
            </div>
            <div class="form-group">
                <label for="supply-date">Date of Supply</label>
                <input type="datetime-local" id="supply-date" name="supply_time" required>
            </div>
        </div>
        <div class="form-row">

        </div>

        <h3>Medicine Details</h3>
        <table class="bed-table">
            <thead>
            <tr>
                <th>Medicine ID</th>
                <th>Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Manufacture Date</th>
                <th>Expiry Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="medicine-table-body">
            <tr>
                <td><input type="text" name="med_id[]" placeholder="Insert ID"></td>
                <td><input type="text" name="med_name[]" placeholder="Insert name"></td>
                <td><input type="text" name="price[]" placeholder="Insert unit price"></td>
                <td><input type="text" name="qty[]" placeholder="Insert quantity"></td>
                <td><input type="date" name="manu_date[]" placeholder="Insert manufacture date"></td>
                <td><input type="date" name="exp_date[]" placeholder="Insert expiry date"></td>
                <td><button type="button" class="remove-row-btn btn">Remove</button></td>
            </tr>
            </tbody>
        </table>
        <button type="button" id="add-medicine-row" class="btn">Add New Medicine</button>

        <div class="form-row">
            <div class="form-group form-actions">
                <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addMedicineRowBtn = document.getElementById('add-medicine-row');
        const medicineTableBody = document.getElementById('medicine-table-body');

        // Add event listener to "Remove" buttons for the initially loaded row
        const removeRowBtns = medicineTableBody.querySelectorAll('.remove-row-btn');
        removeRowBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const row = this.parentNode.parentNode;
                row.parentNode.removeChild(row);
            });
        });

        addMedicineRowBtn.addEventListener('click', function() {
            const newRow = document.createElement('tr');
            const rowHtml = `
            <td><input type="text" name="med_id[]" placeholder="Insert ID"></td>
            <td><input type="text" name="med_name[]" placeholder="Insert name"></td>
            <td><input type="text" name="price[]" placeholder="Insert unit price"></td>
            <td><input type="text" name="qty[]" placeholder="Insert quantity"></td>
            <td><input type="date" name="manu_date[]" placeholder="Insert manufacture date"></td>
            <td><input type="date" name="exp_date[]" placeholder="Insert expiry date"></td>
            <td><button type="button" class="remove-row-btn btn">Remove</button></td>
        `;
            newRow.innerHTML = rowHtml;
            medicineTableBody.appendChild(newRow);

            const removeRowBtns = newRow.querySelectorAll('.remove-row-btn');
            removeRowBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const row = this.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                });
            });
        });
    });
</script>
</body>
</html>