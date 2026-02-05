<?php
include '../database/db.php';

$sql = "SELECT SIN(3) AS sin_value;";
$result = $conn->query($sql);

echo "<h2>SIN() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT SIN(3) AS sin_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Sine Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["sin_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
