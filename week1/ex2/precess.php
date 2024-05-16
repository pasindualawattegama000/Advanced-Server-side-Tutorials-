<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Above Mark</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
        <?php
        // Define student data
        $student_marks = array(
            "Samwise Gamgee" => 88,
            "Frodo Baggins" => 56,
            "Elrond Half-Elven" => 92,
            "Gandalf Mithrandir" => 35,
            "Merry Brandybuck" => 41,
            "Pippin Took" => 25,
            "Legolas Greenleaf" => 67
        );

        // Get mark entered by user
        $entered_mark = $_POST["mark"];


        echo "<h2>Students Scoring at or Above the Entered Mark: {$entered_mark} </h2>";
        echo "<table>
        <tr>
            <th>Student Name</th>
            <th>Mark</th>
        </tr>
            ";
        // Display students scoring at or above the entered mark
        foreach ($student_marks as $student => $mark) {
            if ($mark >= $entered_mark) {
                echo "<tr><td>$student</td><td>$mark</td></tr>";
            }
        }
        ?>
    </table>

</body>
</html>
