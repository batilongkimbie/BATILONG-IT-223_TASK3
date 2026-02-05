<?php
include '../database/db.php';

$sql = "SELECT VERSION() AS mysql_version;";
$result = $conn->query($sql);

echo "<h2>VERSION() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT VERSION() AS mysql_version;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>MySQL Version</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['mysql_version'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
