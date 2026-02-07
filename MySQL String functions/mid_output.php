<?php
include '../database/db.php';

$sql = "SELECT firstname, MID(firstname, 2, 3) AS mid_name FROM student_data;";
$result = $conn->query($sql);

echo "<h2>MID() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, MID(firstname, 2, 3) AS mid_name FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>First Name</th>
                <th>Mid Name</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["firstname"] . "</td>
                    <td>" . $row["mid_name"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
