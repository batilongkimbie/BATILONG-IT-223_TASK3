<?php
include '../database/db.php';

$sql = "SELECT lastname, enrolled_datetime, DAY(enrolled_datetime) AS day_number FROM student_data;";
$result = $conn->query($sql);

echo "<h2>DAY() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, enrolled_datetime, DAY(enrolled_datetime) AS day_number FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Enrolled Datetime</th>
                <th>Day Number</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['enrolled_datetime'] . "</td>
                <td>" . $row['day_number'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
