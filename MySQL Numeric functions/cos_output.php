<?php
include '../database/db.php';

$sql = "SELECT COS(3) AS cosine_value;";
$result = $conn->query($sql);

echo "<h2>COS() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT COS(3) AS cosine_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Cosine Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["cosine_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
