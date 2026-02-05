<?php
include '../database/db.php';

$sql = "SELECT SYSDATE() AS system_date_time;";
$result = $conn->query($sql);

echo "<h2>SYSDATE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT SYSDATE() AS system_date_time;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>System Date Time</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['system_date_time'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
