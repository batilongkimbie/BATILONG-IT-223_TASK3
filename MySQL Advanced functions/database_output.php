<?php
include '../database/db.php';

$sql = "SELECT DATABASE() AS current_database;";
$result = $conn->query($sql);

echo "<h2>DATABASE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT DATABASE() AS current_database;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Current Database</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['current_database'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
