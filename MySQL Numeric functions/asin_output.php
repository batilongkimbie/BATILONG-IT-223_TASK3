<?php
include '../database/db.php';

$sql = "SELECT ASIN(0.5) AS arc_sine;";
$result = $conn->query($sql);

echo "<h2>ASIN() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT ASIN(0.5) AS arc_sine;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Arc Sine</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["arc_sine"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
