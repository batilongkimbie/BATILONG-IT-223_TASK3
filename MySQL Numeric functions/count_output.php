<?php
include '../database/db.php';

$sql = "SELECT program, COUNT(program) AS total_students FROM student_data GROUP BY program;";
$result = $conn->query($sql);

echo "<h2>COUNT() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT program, COUNT(program) AS total_students FROM student_data GROUP BY program;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Program</th>
                <th>Total Students</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["program"] . "</td>
                    <td>" . $row["total_students"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();

?>