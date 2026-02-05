<?php
include '../database/db.php';

$sql = "SELECT CURDATE() AS cur_date;";
$result = $conn->query($sql);

echo "<h2>CURDATE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT CURDATE() AS cur_date;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Current Date</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['cur_date'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
