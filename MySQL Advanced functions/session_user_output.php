<?php
include '../database/db.php';

$sql = "SELECT SESSION_USER() AS session_user;";
$result = $conn->query($sql);

echo "<h2>SESSION_USER() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT SESSION_USER() AS session_user;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Session User</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['session_user'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
