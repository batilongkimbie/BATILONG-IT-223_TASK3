<?php
include '../database/db.php';

$sql = "SELECT lastname, RADIANS(grade) AS radians_grade, DEGREES(RADIANS(grade)) AS degrees_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>DEGREES() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, RADIANS(grade) AS radians_grade, DEGREES(RADIANS(grade)) AS degrees_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Radians Grade</th>
                <th>Degrees Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["radians_grade"] . "</td>
                    <td>" . $row["degrees_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
