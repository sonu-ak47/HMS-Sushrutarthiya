<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients Investigation Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="pat_investigation.css">
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
            <h1>Patients Investigation Form</h1>
            <p>Welcome to Sushrutarhtiya. Please provide the following details for patient investigation.</p>
        </div>
    </div>
</header>

<div class="section__container form-container">
    <form class="investigation-form" method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">
        <h3>Patient Identification</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="pat-id">Patient ID:</label>
                <input type="tel" id="pat-id" name="pat_id" placeholder="Insert Patient ID" required>
            </div>
        </div>

        <h3>Patient Personal Info</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="height">Height:</label>
                <input type="tel" id="height" name="height" placeholder="Enter height" required>
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="tel" id="weight" name="weight" placeholder="Enter weight" required>
            </div>
        </div>

        <h3>Symptoms of Disease</h3>
        <div class="form-row">
            <div class="form-group">
                <label>1:</label>
                <input type="text" id="disease-1" name="disease_1" placeholder="Disease" required>
            </div>
            <div class="form-group">
                <label>2:</label>
                <input type="text" id="disease-2" name="disease_2">
            </div>
            <div class="form-group">
                <label>3:</label>
                <input type="text" id="disease-3" name="disease_3">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>4:</label>
                <input type="text" id="disease-4" name="disease_4">
            </div>
            <div class="form-group">
                <label>5:</label>
                <input type="text" id="disease-5" name="disease_5">
            </div>
            <div class="form-group">
                <label>6:</label>
                <input type="text" id="disease-6" name="disease_6">
            </div>
        </div>

        <h3>Blood Pressure:</h3>
        <div class="form-row">
            <div class="form-group">
                <label for="upper">Upper number (systolic) mm Hg : </label>
                <input type="tel" id="upper" name="upper" required>
            </div>
            <div class="form-group">
                <label for="lower">Lower number (diastolic) mm Hg : </label>
                <input type="tel" id="lower" name="lower" required>
            </div>
        </div>


        <h3>General Food Habit</h3>
        <div class="form-row">
            <div class="form-group">
                <label>Breakfast:</label>
                <div class="form-row">
                    <div class="form-group">
                        <label for="breakf-1">1:</label>
                        <input type="text" id="breakf-1" name="breakf_1" required>
                    </div>
                    <div class="form-group">
                        <label for="breakf-2">2:</label>
                        <input type="text" id="breakf-2" name="breakf_2">
                    </div>
                    <div class="form-group">
                        <label for="breakf-3">3:</label>
                        <input type="text" id="breakf-3" name="breakf_3">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Lunch:</label>
                <div class="form-row">
                    <div class="form-group">
                        <label for="lunch-1">1:</label>
                        <input type="text" id="lunch-1" name="lunch_1" required>
                    </div>
                    <div class="form-group">
                        <label for="lunch-2">2:</label>
                        <input type="text" id="lunch-2" name="lunch_2">
                    </div>
                    <div class="form-group">
                        <label for="lunch-3">3:</label>
                        <input type="text" id="lunch-3" name="lunch_3">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label>Dinner:</label>
                <div class="form-row">
                    <div class="form-group">
                        <label for="dinner-1">1:</label>
                        <input type="text" id="dinner-1" name="dinner_1" required>
                    </div>
                    <div class="form-group">
                        <label for="dinner-2">2:</label>
                        <input type="text" id="dinner-2" name="dinner_2">
                    </div>
                    <div class="form-group">
                        <label for="dinner-3">3:</label>
                        <input type="text" id="dinner-3" name="dinner_3">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="disease-name">Disease Name:</label>
                <input type="text" id="disease-name" name="disease" required>
            </div>
        </div>
        

        <div class="form-row">
            <div class="form-group">
                <label for="doc-id">Doctor ID:</label>
                <input type="tel" id="doc-id" name="doc_id" required>
            </div>
            <div class="form-group">
                <label for="doc-name">Doctor Name:</label>
                <input type="text" id="doc-name" name="doc_name" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group form-actions">
                <button type="submit" class="btn">Submit</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

