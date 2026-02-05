<?php
include '../database/db.php';

$sql = "SELECT STR_TO_DATE('2023-01-01', '%Y-%m-%d') AS converted_date;";
$result = $conn->query($sql);

echo "<h2>STR_TO_DATE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT STR_TO_DATE('2023-01-01', '%Y-%m-%d') AS converted_date;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Converted Date</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['converted_date'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
