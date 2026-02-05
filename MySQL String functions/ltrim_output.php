<?php
include '../database/db.php';

$sql = "SELECT CONCAT(firstname, lastname) AS fullname, CONCAT(firstname, LTRIM(lastname)) AS trimmed_lastname FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LTRIM() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CONCAT(firstname, lastname) AS fullname, CONCAT(firstname, LTRIM(lastname)) AS trimmed_lastname FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Full Name</th>
                <th>Trimmed Last Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["trimmed_lastname"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>