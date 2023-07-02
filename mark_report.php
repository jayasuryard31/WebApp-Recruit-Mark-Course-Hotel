<!DOCTYPE html>
<html>
<head>
    <title>Mark Management Report - Result</title>
    <style>
        body {
            background-color: powderblue; /* Set the background color to powder blue */
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            /* display: none; Initially hide the popup */
        }

        .popup.show {
            display: block; /* Show the popup when the class "show" is added */
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var generateBtn = document.getElementById('generateBtn');
            var popup = document.getElementById('popup');

            generateBtn.addEventListener('click', function () {
                popup.classList.add('show'); /* Add the "show" class to the popup to make it visible */
            });
        });
    </script>
</head>
<body>
    <div class="popup" id="popup">
        <div class="result">
            <?php
            // Get form data
            $sname = $_POST['sname'];
            $rollno = $_POST['rollno'];
            $department = $_POST['department'];
            $subject1 = $_POST['subject1'];
            $subject2 = $_POST['subject2'];
            $subject3 = $_POST['subject3'];
            $subject4 = $_POST['subject4'];
            $subject5 = $_POST['subject5'];

            // Calculate average
            $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
            $average = $totalMarks / 5;

            // Determine pass/fail
            $passFail = ($subject1 >= 50 && $subject2 >= 50 && $subject3 >= 50 && $subject4 >= 50 && $subject5 >= 50) ? 'Pass' : 'Fail';

            // Determine class
            if ($average >= 80) {
                $class = 'Distinction';
            } elseif ($average >= 60) {
                $class = 'First Class';
            } elseif ($average >= 50) {
                $class = 'Second Class';
            } else {
                $class = 'No Class';
            }

            // Display the results
            echo "<p><span class='highlight'>Student Name:</span> $sname</p>";
            echo "<p><span class='highlight'>Roll Number:</span> $rollno</p>";
            echo "<p><span class='highlight'>Department:</span> $department</p>";
            echo "<p><span class='highlight'>Average Marks:</span> $average</p>";
            echo "<p><span class='highlight'>Pass/Fail:</span> $passFail</p>";
            echo "<p><span class='highlight'>Class:</span> $class</p>";
            ?>
        </div>
    </div>
</body>
</html>
