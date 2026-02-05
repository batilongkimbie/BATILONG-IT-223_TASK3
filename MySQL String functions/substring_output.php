<?php
include '../database/db.php';

$sql = "SELECT firstname, SUBSTRING(firstname, 1, 3) AS first_three_chars FROM student_data;";
$result = $conn->query($sql);

echo "<h2>SUBSTRING() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, SUBSTRING(firstname, 1, 3) AS first_three_chars FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>First Three Characters</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["first_three_chars"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>