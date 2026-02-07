<?php
include '../database/db.php';

$sql = "SELECT firstname, SUBSTRING_INDEX(firstname, 'e', 1) AS substring_before_first_e FROM student_data;";
$result = $conn->query($sql);

echo "<h2>SUBSTRING_INDEX() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, SUBSTRING_INDEX(firstname, 'e', 1) AS substring_before_first_e FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Substring Before First 'e'</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["substring_before_first_e"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
