<?php
include '../database/db.php';

$sql = "SELECT CONCAT(firstname, SPACE(5), lastname) AS fullname_with_spaces FROM student_data;";
$result = $conn->query($sql);

echo "<h2>SPACE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CONCAT(firstname, SPACE(5), lastname) AS fullname_with_spaces FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Full Name with Spaces</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["fullname_with_spaces"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>