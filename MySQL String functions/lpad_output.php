<?php
include '../database/db.php';

$sql = "SELECT firstname, LPAD(firstname, 10, '*') AS padded_firstname FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LPAD() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, LPAD(firstname, 10, '*') AS padded_firstname FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Padded First Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["padded_firstname"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
