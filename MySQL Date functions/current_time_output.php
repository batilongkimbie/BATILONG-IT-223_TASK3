<?php
include '../database/db.php';

$sql = "SELECT CURRENT_TIME() AS cur_time;";
$result = $conn->query($sql);

echo "<h2>CURRENT_TIME() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CURRENT_TIME() AS cur_time;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Current Time</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['cur_time'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
