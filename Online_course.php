<!DOCTYPE html>
<html>
<head>
    <title>Online Course Registration - Result</title>
    <style>
        body {
            background-color: #ffffcc; /* Pale yellow background */
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Online Course Registration - Result</h2>
        <div class="result">
            <?php
            // Get form data
            $participantName = $_POST['participantName'];
            $collegeName = $_POST['collegeName'];
            $branch = $_POST['branch'];
            $programme = $_POST['programs'];
            $numOfDays = $_POST['numOfDays'];
            $gender = $_POST['gender'];
            $memberType = $_POST['memberType'];

            // Calculate total charge
            $chargePerDay = ($memberType == 'Internal') ? ['C#' => 1000, 'C++' => 1750, 'C' => 1500, 'Java' => 1250] : ['C#' => 1500, 'C++' => 2000, 'C' => 1750, 'Java' => 1500];
            $totalCharge = 0;
            foreach ($programme as $prog) {
                if (isset($chargePerDay[$prog])) {
                    $totalCharge += $chargePerDay[$prog] * $numOfDays;
                }
            }

            // Display result
            echo "<p><span class='highlight'>Participant Name:</span> $participantName</p>";
            echo "<p><span class='highlight'>College Name:</span> $collegeName</p>";
            echo "<p><span class='highlight'>Branch:</span> $branch</p>";
            echo "<p><span class='highlight'>Programme(s):</span> " . implode(', ', $programme) . "</p>";
            echo "<p><span class='highlight'>Number of Days:</span> $numOfDays</p>";
            echo "<p><span class='highlight'>Gender:</span> $gender</p>";
            echo "<p><span class='highlight'>Type of Member:</span> $memberType</p>";
            echo "<p><span class='highlight'>Total Charge:</span> Rs $totalCharge</p>";
            ?>
        </div>
    </div>
</body>
</html>
