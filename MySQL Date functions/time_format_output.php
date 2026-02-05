<?php
include '../database/db.php';

$sql = "SELECT lastname, TIME_FORMAT(enrolled_datetime, '%H:%i:%s') AS formatted_time FROM student_data;";
$result = $conn->query($sql);

echo "<h2>TIME_FORMAT() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, TIME_FORMAT(enrolled_datetime, '%H:%i:%s') AS formatted_time FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Formatted Time</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['formatted_time'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
