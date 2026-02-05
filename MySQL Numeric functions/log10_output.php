<?php
include '../database/db.php';

$sql = "SELECT LOG10(2) AS log10_value;";
$result = $conn->query($sql);

echo "<h2>LOG10() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT LOG10(2) AS log10_value;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Log10 Value</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["log10_value"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
