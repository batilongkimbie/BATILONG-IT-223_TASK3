<?php
include '../database/db.php';

$sql = "SELECT CONCAT(lastname, ' is ', CHAR(97), ' student from ', program) AS student_program FROM student_data;";
$result = $conn->query($sql);

echo "<h2>CHAR() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CONCAT(lastname, ' is ', CHAR(97), ' student from ', program) AS student_program FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Student Program</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["student_program"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>