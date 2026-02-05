<?php
include '../database/db.php';

$sql = "SELECT CONNECTION_ID() AS connection_id;";
$result = $conn->query($sql);

echo "<h2>CONNECTION_ID() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CONNECTION_ID() AS connection_id;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Connection ID</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['connection_id'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
