<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ward Information Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="wardInfo.css">
</head>
<body>
<header>
    <nav class="section__container nav__container">
        <div class="nav__logo">SUSHRU<span>TARTHIYA</span></div>
        <img src="logo.png" alt="Logo" class="nav__logo-img">
    </nav>
    <div class="section__container header__container">
        <div class="header__content">
            <h1>Ward Information Form</h1>
            <p>Please provide the following details to update ward information.</p>
        </div>
    </div>
</header>

<div class="section__container form-container">
    <form class="admission-form" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">
        <h3>Ward Details</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="ward-id">Ward ID</label>
                <input type="tel" id="ward-id" name="ward_id" placeholder="Enter Ward ID">
            </div>
            <div class="form-group">
                <label for="ward-name">Ward Name</label>
                <input type="text" id="ward-name" name="ward_name" placeholder="Enter ward name" required>
            </div>
        </div>

        <h3>Staff Details</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="reg-id">Registrar ID</label>
                <input type="text" id="reg-id" name="reg_id" placeholder="To be auto-generated" disabled>
            </div>
            <div class="form-group">
                <label for="reg-name">Registrar Name</label>
                <input type="text" id="reg-name" name="reg_name" placeholder="To be auto-generated" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="sup-id">Supervisor ID</label>
                <input type="text" id="sup-id" name="sup_id" placeholder="To be auto-generated" disabled>
            </div>
            <div class="form-group">
                <label for="sup-name">Supervisor Name</label>
                <input type="text" id="sup-name" name="sup_name" placeholder="To be auto-generated" disabled>
            </div>
        </div>

        <h3>Bed Details</h3>
        <table class="bed-table">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Bed No</th>
                <th>Bed Type</th>
                <th>Rent</th>
                <th>Status</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="bed-table-body">
            <tr>
                <td>1.</td>
                <td><input type="text" name="bed_no[]" placeholder="Insert bed no"></td>
                <td><input type="text" name="bed_type[]" placeholder="Insert bed type"></td>
                <td><input type="text" name="rent[]" placeholder="Insert rent"></td>
                <td>
                    <select name="status[]" required>
                        <option value="occupied">Occupied</option>
                        <option value="empty">Empty</option>
                    </select>
                </td>
                <td><button type="button" class="remove-row-btn btn">Remove</button></td>
            </tr>
            </tbody>
        </table>
        <button type="button" id="add-bed-row" class="btn">Add New Bed</button>

        <div class="form-row">
            <div class="form-group form-actions">
                <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addBedRowBtn = document.getElementById('add-bed-row');
        const bedTableBody = document.getElementById('bed-table-body');
        let serialNumber = 2; // Start from 2 since we have a pre-loaded row

        // Add event listener to "Remove" button for the pre-loaded row
        const preloadedRemoveBtn = bedTableBody.querySelector('.remove-row-btn');
        preloadedRemoveBtn.addEventListener('click', function() {
            const row = this.parentNode.parentNode;
            row.parentNode.removeChild(row);
        });

        addBedRowBtn.addEventListener('click', function() {
            const newRow = document.createElement('tr');
            const rowHtml = `
            <td>${serialNumber}.</td>
            <td><input type="text" name="bed_no[]" placeholder="Insert bed no"></td>
            <td><input type="text" name="bed_type[]" placeholder="Insert bed type"></td>
            <td><input type="text" name="rent[]" placeholder="Insert rent"></td>
            <td>
                <select name="status[]" required>
                    <option value="occupied">Occupied</option>
                    <option value="empty">Empty</option>
                </select>
            </td>
            <td><button type="button" class="remove-row-btn btn">Remove</button></td>
        `;
            newRow.innerHTML = rowHtml;
            bedTableBody.appendChild(newRow);

            const removeRowBtns = newRow.querySelectorAll('.remove-row-btn');
            removeRowBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const row = this.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                });
            });

            serialNumber++;
        });
    });
</script>
</body>
</html>