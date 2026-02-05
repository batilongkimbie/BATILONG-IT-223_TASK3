<?php
include '../database/db.php';

$sql = "SELECT MAX(grade) AS max_grade FROM student_data;";
$result = $conn->query($sql);

echo "<h2>MAX() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT MAX(grade) AS max_grade FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Maximum Grade</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["max_grade"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
