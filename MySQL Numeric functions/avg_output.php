<?php
include '../database/db.php';

$sql = "SELECT program, AVG(grade) AS avg_grade FROM student_data GROUP BY program;";
$result = $conn->query($sql);

echo "<h2>AVG() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT program, AVG(grade) AS avg_grade FROM student_data GROUP BY program;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Program</th>
                <th>Average Grade</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["program"] . "</td>
                    <td>" . $row["avg_grade"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();

?>