<?php
include '../database/db.php';

$sql = "SELECT ATAN(1) AS arc_tangent;";
$result = $conn->query($sql);

echo "<h2>ATAN() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT ATAN(1) AS arc_tangent;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Arc Tangent</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["arc_tangent"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
