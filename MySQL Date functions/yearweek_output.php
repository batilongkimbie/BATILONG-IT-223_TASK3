<?php
include '../database/db.php';

$sql = "SELECT lastname, enrolled_datetime, YEARWEEK(enrolled_datetime) AS year_week_number FROM student_data;";
$result = $conn->query($sql);

echo "<h2>YEARWEEK() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, enrolled_datetime, YEARWEEK(enrolled_datetime) AS year_week_number FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Enrolled Datetime</th>
                <th>Year Week Number</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['enrolled_datetime'] . "</td>
                <td>" . $row['year_week_number'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
