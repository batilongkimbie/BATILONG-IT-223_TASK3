<?php
include '../database/db.php';

$sql = "SELECT lastname, grade, ROUND(grade, 1) AS rounded_grade FROM student_data;";
$result = $conn->query($sql);

echo "<h2>ROUND() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, grade, ROUND(grade, 1) AS rounded_grade FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Grade</th>
                <th>Rounded Grade</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["grade"] . "</td>
                    <td>" . $row["rounded_grade"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
