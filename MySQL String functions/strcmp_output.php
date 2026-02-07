<?php
include '../database/db.php';

$sql = "SELECT firstname, lastname, STRCMP(firstname, lastname) AS comparison_result FROM student_data;";
$result = $conn->query($sql);

echo "<h2>STRCMP() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, lastname, STRCMP(firstname, lastname) AS comparison_result FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Comparison Result</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["lastname"] . "</td>
                    <td>" . $row["comparison_result"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
