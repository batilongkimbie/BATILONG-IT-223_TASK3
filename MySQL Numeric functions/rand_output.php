<?php
include '../database/db.php';

$sql = "SELECT lastname, grade FROM student_data ORDER BY RAND() LIMIT 3;";
$result = $conn->query($sql);

echo "<h2>RAND() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, grade FROM student_data ORDER BY RAND() LIMIT 3;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Grade</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["grade"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
