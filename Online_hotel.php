<!DOCTYPE html>
<html>
<head>
    <title>Online Hotel Management - Result</title>
    <style>
        body {
            background-color: #e6e6fa; /* Pale indigo background */
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white sheet */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin: 50px auto;
        }

        h2 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }

        .result {
            margin-top: 30px;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #cccccc;
            border-radius: 5px;
        }

        .result p {
            margin: 10px 0;
        }

        .result .highlight {
            font-weight: bold;
            color: #007bff;
        }

        .back-to-index {
            position: fixed;
            top: 20px;
            left: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Online Hotel Management - Result</h2>
        <div class="result">
            <?php
            // Get form data
            $idNo = $_POST['idNo'];
            $cname = $_POST['cname'];
            $add1 = $_POST['add1'];
            $add2 = $_POST['add2'];
            $city = $_POST['city'];
            $pin = $_POST['pin'];
            $emailid = $_POST['emailId'];
            $dob = $_POST['dob'];
            $sex = $_POST['sex'];
            $roomType = $_POST['roomType'];
            $noOfStay = $_POST['noOfStay'];
            $packageType = $_POST['packageType'];

            // Calculate charges based on package type and room type
            $charge = 0;
            if ($packageType === 'summer') {
                switch ($roomType) {
                    case 'SUPER DELUXE':
                        $charge = 1500 * $noOfStay;
                        break;
                    case 'DELUXE':
                        $charge = 1000 * $noOfStay;
                        break;
                    case 'DOUBLE':
                        $charge = 750 * $noOfStay;
                        break;
                    case 'SINGLE':
                        $charge = 500 * $noOfStay;
                        break;
                }
            } else {
                switch ($roomType) {
                    case 'Super Deluxe':
                        $charge = 1250 * $noOfStay;
                        break;
                    case 'Deluxe':
                        $charge = 750 * $noOfStay;
                        break;
                    case 'Double':
                        $charge = 600 * $noOfStay;
                        break;
                    case 'Single':
                        $charge = 300 * $noOfStay;
                        break;
                }
            }

            // Display result
            echo "<p><span class='highlight'>Id.no:</span> $idNo</p>";
            echo "<p><span class='highlight'>Customer Name:</span> $cname</p>";
            echo "<p><span class='highlight'>Address Line 1:</span> $add1</p>";
            echo "<p><span class='highlight'>Address Line 2:</span> $add2</p>";
            echo "<p><span class='highlight'>City:</span> $city</p>";
            echo "<p><span class='highlight'>Pin:</span> $pin</p>";
            echo "<p><span class='highlight'>Email ID:</span> $emailid</p>";
            echo "<p><span class='highlight'>Date of Birth:</span> $dob</p>";
            echo "<p><span class='highlight'>Sex:</span> $sex</p>";
            echo "<p><span class='highlight'>Room Type:</span> $roomType</p>";
            echo "<p><span class='highlight'>Number of Stay:</span> $noOfStay</p>";
            echo "<p><span class='highlight'>Type of Package:</span> $packageType</p>";
            echo "<p><span class='highlight'>Total Charge:</span> Rs $charge</p>";
            ?>
        </div>
    </div>
</body>
</html>
