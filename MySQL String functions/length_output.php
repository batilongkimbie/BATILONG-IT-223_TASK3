<?php
include '../database/db.php';

$sql = "SELECT firstname, LENGTH(firstname) AS firstname_length FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LENGTH() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, LENGTH(firstname) AS firstname_length FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Length of First Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["firstname_length"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>