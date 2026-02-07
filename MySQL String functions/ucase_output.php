<?php
include '../database/db.php';

$sql = "SELECT firstname, UCASE(lastname) AS uppercase_lastname FROM student_data;";
$result = $conn->query($sql);

echo "<h2>UCASE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, UCASE(lastname) AS uppercase_lastname FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Uppercase Last Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["uppercase_lastname"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
