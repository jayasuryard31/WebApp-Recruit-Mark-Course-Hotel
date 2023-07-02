<!DOCTYPE html>
<html>
<head>
    <title>Recruitment Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f4e9; /* Pale yellow background */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            width: 500px;
            padding: 40px;
            background-color: #ffffff; /* White sheet */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        .highlighted {
            background-color: yellow;
            font-weight: bold;
        }

        .details {
            margin-top: 20px;
        }

        .details p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $id_no = $_POST['idNo'];
        $name = $_POST['name'];
        $add1 = $_POST['add1'];
        $add2 = $_POST['add2'];
        $city = $_POST['city'];
        $pin = $_POST['pin'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $qualification = $_POST['qualification'];
        $class = $_POST['class'];
        $experience = $_POST['experience'];
        $age = $_POST['age'];

        // Check selection criteria
        $selected = false;
        if ($qualification == 'UG' && $class == 'Distinction' && $experience >= 3 && $age <= 30) {
            $selected = true;
        } elseif ($qualification == 'PG' && $class == 'First Class' && $experience >= 1 && $age <= 35) {
            $selected = true;
        }

        // Display results
        if ($selected) {
            echo "<h2 class='highlighted'>Congratulations, you have been selected!</h2>";
        } else {
            echo "<h2>Thank you for applying. Unfortunately, you have not been selected.</h2>";
        }

        // Display applicant details
        echo "<div class='details'>";
        echo "<h3>Applicant Details:</h3>";
        echo "<p><strong>ID Number:</strong> $id_no</p>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Address Line 1:</strong> $add1</p>";
        echo "<p><strong>Address Line 2:</strong> $add2</p>";
        echo "<p><strong>City:</strong> $city</p>";
        echo "<p><strong>PIN Code:</strong> $pin</p>";
        echo "<p><strong>Email ID:</strong> $email</p>";
        echo "<p><strong>Sex:</strong> $sex</p>";
        echo "<p><strong>Qualification:</strong> $qualification</p>";
        echo "<p><strong>Class:</strong> $class</p>";
        echo "<p><strong>Experience in Job:</strong> $experience years</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "</div>";
        ?>
    </div>
</body>
</html>
