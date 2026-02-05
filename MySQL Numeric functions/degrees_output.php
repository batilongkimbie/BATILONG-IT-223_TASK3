<?php
include '../database/db.php';

$sql = "SELECT DEGREES(6.283) AS degrees_value;";
$result = $conn->query($sql);

echo "<h2>DEGREES() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT DEGREES(6.283) AS degrees_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Degrees Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["degrees_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
