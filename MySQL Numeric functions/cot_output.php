<?php
include '../database/db.php';

$sql = "SELECT COT(-5) AS cotangent_value;";
$result = $conn->query($sql);

echo "<h2>COT() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT COT(-5) AS cotangent_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Cotangent Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["cotangent_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
