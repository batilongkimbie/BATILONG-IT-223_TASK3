<?php
include '../database/db.php';

$sql = "SELECT SYSTEM_USER() AS system_user;";
$result = $conn->query($sql);

echo "<h2>SYSTEM_USER() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT SYSTEM_USER() AS system_user;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>System User</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['system_user'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
