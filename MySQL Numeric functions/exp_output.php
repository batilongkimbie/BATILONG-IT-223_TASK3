<?php
include '../database/db.php';

$sql = "SELECT EXP(2) AS exponential_value;";
$result = $conn->query($sql);

echo "<h2>EXP() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT EXP(2) AS exponential_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Exponential Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["exponential_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
