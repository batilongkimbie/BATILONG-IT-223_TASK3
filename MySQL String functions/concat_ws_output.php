<?php
include '../database/db.php';

$sql = "SELECT CONCAT_WS(' ', firstname, lastname) AS fullname FROM student_data;";
$result = $conn->query($sql);

echo "<h2>CONCAT_WS() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CONCAT_WS(' ', firstname, lastname) AS fullname FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Full Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["fullname"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>