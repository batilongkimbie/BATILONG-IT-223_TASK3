<?php
include '../database/db.php';

$sql = "SELECT LOCALTIMESTAMP() AS cur_timestamp;";
$result = $conn->query($sql);

echo "<h2>LOCALTIMESTAMP() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT LOCALTIMESTAMP() AS cur_timestamp;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Current Timestamp</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['cur_timestamp'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
