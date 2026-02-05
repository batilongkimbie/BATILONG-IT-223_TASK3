<?php
include '../database/db.php';

$sql = "SELECT lastname, TIME(enrolled_datetime) AS extracted_time, TIMEDIFF(enrolled_datetime, NOW()) AS time_difference FROM student_data;";
$result = $conn->query($sql);

echo "<h2>TIMEDIFF() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, TIME(enrolled_datetime) AS extracted_time, TIMEDIFF(enrolled_datetime, NOW()) AS time_difference FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Extracted Time</th>
                <th>Time Difference</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['extracted_time'] . "</td>
                <td>" . $row['time_difference'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
