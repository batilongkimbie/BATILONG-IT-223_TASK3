<?php
include '../database/db.php';

$sql = "SELECT USER() AS cur_user;";
$result = $conn->query($sql);

echo "<h2>USER() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT USER() AS cur_user;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Current User</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['cur_user'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
