<?php
include '../database/db.php';

$sql = "SELECT firstname, RIGHT(firstname, 3) AS last_three_chars FROM student_data;";
$result = $conn->query($sql);

echo "<h2>RIGHT() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, RIGHT(firstname, 3) AS last_three_chars FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Last Three Characters</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["last_three_chars"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>