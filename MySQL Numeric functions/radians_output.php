<?php
include '../database/db.php';

$sql = "SELECT RADIANS(180) AS radians_value;";
$result = $conn->query($sql);

echo "<h2>RADIANS() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT RADIANS(180) AS radians_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Radians Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["radians_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
