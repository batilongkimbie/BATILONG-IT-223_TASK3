<?php
include '../database/db.php';

$sql = "SELECT lastname, units, LOG2(units) AS log2_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LOG2() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, units, LOG2(units) AS log2_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Units</th>
                <th>LOG2 Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["units"] . "</td>
                    <td>" . $row["log2_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
