<?php
include '../database/db.php';

$sql = "SELECT lastname, TIMESTAMP(enrolled_datetime) AS timestamp_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>TIMESTAMP() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, TIMESTAMP(enrolled_datetime) AS timestamp_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Timestamp Value</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['timestamp_value'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
