<?php
include '../database/db.php';

$sql = "SELECT lastname, enrolled_datetime, WEEKOFYEAR(enrolled_datetime) AS week_of_year FROM student_data;";
$result = $conn->query($sql);

echo "<h2>WEEKOFYEAR() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, enrolled_datetime, WEEKOFYEAR(enrolled_datetime) AS week_of_year FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Enrolled Datetime</th>
                <th>Week Of Year</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['enrolled_datetime'] . "</td>
                <td>" . $row['week_of_year'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
