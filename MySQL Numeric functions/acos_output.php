<?php
include '../database/db.php';

$sql = "SELECT ACOS(-1) AS arc_cosine;";
$result = $conn->query($sql);

echo "<h2>ACOS() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT ACOS(-1) AS arc_cosine;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Arc Cosine</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["arc_cosine"] . "</td>
                </tr>";
            }

            echo "</table>";
 } else {
    echo "0 results";
 }

   $conn->close();
?>
