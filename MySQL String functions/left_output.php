<?php
include '../database/db.php';

$sql = "SELECT firstname, LEFT(firstname, 3) AS first_three_chars FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LEFT() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, LEFT(firstname, 3) AS first_three_chars FROM student_data;</p>
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