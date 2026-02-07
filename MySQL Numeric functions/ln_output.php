<?php
include '../database/db.php';

$sql = "SELECT lastname, grade, LN(grade) AS ln_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LN() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, grade, LN(grade) AS ln_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Grade</th>
                <th>LN Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["grade"] . "</td>
                    <td>" . $row["ln_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
