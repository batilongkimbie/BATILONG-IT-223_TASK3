<?php
include '../database/db.php';

$sql = "SELECT lastname, units, grade, ATAN2(units, grade) AS atan_unit_grades FROM student_data;";
$result = $conn->query($sql);

echo "<h2>ATAN2() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, units, grade, ATAN2(units, grade) AS atan_unit_grades FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Units</th>
                <th>Grade</th>
                <th>Arc Tangent</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["units"] . "</td>
                    <td>" . $row["grade"] . "</td>
                    <td>" . $row["atan_unit_grades"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
