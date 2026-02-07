<?php
include '../database/db.php';

$sql = "SELECT firstname, FIND_IN_SET(firstname, 'Liezel,Felaura,Irene') AS field_position FROM student_data;";
$result = $conn->query($sql);

echo "<h2>FIND_IN_SET() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, FIND_IN_SET(firstname, 'Liezel,Felaura,Irene') AS field_position FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Field Position</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["field_position"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
