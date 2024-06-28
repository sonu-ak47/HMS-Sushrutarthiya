<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="prescription.css">
    <link rel="icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="section__container nav__container">
        <div class="nav__logo">SUSHRU<span>TARTHIYA</span></div>
        <img src="logo.png" alt="Logo" class="nav__logo-img">
    </nav>
    <div class="section__container header__container">
        <div class="header__content">
            <h1>Prescription Form</h1>
            <p>Welcome to Sushrutarhtiya. Please provide the following details to complete the prescription.</p>
        </div>
    </div>
</header>

<div class="section__container form-container">
    <form class="prescription-form" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">
        <h3>Prescription ID: <span id="PrescriptionId">123456</span></h3>
        <br>
        <div class="form-row">
            <div class="form-group">
                <label for="patient-id">Patient ID</label>
                <input type="tel" id="patient-id" name="pat_id" placeholder="Insert Patient ID" required>
            </div>
            <div class="form-group">
                <label for="advice-time">Date of Advice</label>
                <input type="datetime-local" id="advice-time" name="advice_time" required>
            </div>
        </div>

        <h3>Medicines Prescribed</h3>
        <br>
        <table id="medicine-table">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Medicine ID</th>
                <th>Name of Medicine</th>
                <th>Qty per time</th>
                <th>Morning</th>
                <th>Afternoon</th>
                <th>Night</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <button type="button" id="add-medicine-row" class="btn">Add New Medicine</button>


        <br><br><br>

        <h3>Test Advices</h3>
        <br>
        <table id="test-table">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Test ID</th>
                <th>Name of test</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <button type="button" id="add-test-row" class="btn">Add New Test</button>

        <br><br><br>


        <div class="form-row">
            <div class="form-group">
                <label for="special-note">Special Note/Restrictions</label>
                <textarea id="special-note" name="comments" maxlength="500"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="doctor-id">Doctor ID</label>
                <input type="tel" id="doctor-id" name="doc_id" required>
            </div>
            <div class="form-group">
                <label for="doctor-name">Doctor Name</label>
                <input type="text" id="doctor-name" name="doc_name" required>
            </div>
        </div>

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
        const medicineTableBody = document.querySelector('#medicine-table tbody');
        let medicineSerialNumber = 1;

        const addTestRowBtn = document.getElementById('add-test-row');
        const testTableBody = document.querySelector('#test-table tbody');
        let testSerialNumber = 1;

        addMedicineRow();

        addTestRow();

        function addMedicineRow() {
            const newRow = medicineTableBody.insertRow();
            const rowHtml = `
            <tr>
                <td>${medicineSerialNumber}</td>
                <td>
                    <div class="form-group">
                        <input type="text" name="med_id[]" placeholder="Insert ID" required>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="med_name[]" placeholder="Insert name" required>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="quantity[]" required>
                            <option value="" selected>Select One</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="morning[]" required>
                            <option value="" selected>Select One</option>
                            <option value="before meal">before meal</option>
                            <option value="after meal">after meal</option>
                            <option value="none">none</option>
                            <option value="any">any</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="afternoon[]" required>
                            <option value="" selected>Select One</option>
                            <option value="before meal">before meal</option>
                            <option value="after meal">after meal</option>
                            <option value="none">none</option>
                            <option value="any">any</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <select name="night[]" required>
                            <option value="" selected>Select One</option>
                            <option value="before meal">before meal</option>
                            <option value="after meal">after meal</option>
                            <option value="none">none</option>
                            <option value="any">any</option>
                        </select>
                    </div>
                </td>
                <td><button type="button" class="remove-row-btn btn">Remove</button></td>
            </tr>
        `;
            newRow.innerHTML = rowHtml;

            const removeRowBtns = newRow.querySelectorAll('.remove-row-btn');
            removeRowBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const row = this.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                });
            });

            medicineSerialNumber++;
        }

        function addTestRow() {
            const newRow = testTableBody.insertRow();
            const rowHtml = `
            <tr>
                <td>${testSerialNumber}</td>
                <td>
                    <div class="form-group">
                        <input type="text" name="test_id[]" placeholder="Insert test ID">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" name="test_name[]" placeholder="Insert test name">
                    </div>
                </td>
                <td><button type="button" class="remove-row-btn btn">Remove</button></td>
            </tr>
        `;
            newRow.innerHTML = rowHtml;

            const removeRowBtns = newRow.querySelectorAll('.remove-row-btn');
            removeRowBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    const row = this.parentNode.parentNode;
                    row.parentNode.removeChild(row);
                });
            });

            testSerialNumber++;
        }

        addMedicineRowBtn.addEventListener('click', addMedicineRow);
        addTestRowBtn.addEventListener('click', addTestRow);
    });
</script>

</body>
</html>