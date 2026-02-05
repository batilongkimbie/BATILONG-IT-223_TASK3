<?php
include '../database/db.php';

$sql = "SELECT lastname FROM student_data WHERE SOUNDEX(lastname) = SOUNDEX('Golocino');";
$result = $conn->query($sql);

echo "<h2>SOUNDEX() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname FROM student_data WHERE SOUNDEX(lastname) = SOUNDEX('Golocino');</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["lastname"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>