<?php
include '../database/db.php';

$sql = "SELECT MIN(grade) AS min_grade FROM student_data;";
$result = $conn->query($sql);

echo "<h2>MIN() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT MIN(grade) AS min_grade FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Minimum Grade</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["min_grade"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
