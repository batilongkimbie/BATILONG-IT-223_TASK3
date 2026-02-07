<?php
include '../database/db.php';

$sql = "SELECT lastname, DEGREES(grade) AS grade_in_degrees, RADIANS(DEGREES(grade)) AS radians_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>RADIANS() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, DEGREES(grade) AS grade_in_degrees, RADIANS(DEGREES(grade)) AS radians_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Grade in Degrees</th>
                <th>Radians Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["grade_in_degrees"] . "</td>
                    <td>" . $row["radians_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
