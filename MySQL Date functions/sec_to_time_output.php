<?php
include '../database/db.php';

$sql = "SELECT lastname, TIME_TO_SEC(enrolled_datetime) AS time_in_seconds, SEC_TO_TIME(TIME_TO_SEC(enrolled_datetime)) AS converted_time FROM student_data;";
$result = $conn->query($sql);

echo "<h2>SEC_TO_TIME() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, TIME_TO_SEC(enrolled_datetime) AS time_in_seconds, SEC_TO_TIME(TIME_TO_SEC(enrolled_datetime)) AS converted_time FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Time in Seconds</th>
                <th>Converted Time</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['time_in_seconds'] . "</td>
                <td>" . $row['converted_time'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
