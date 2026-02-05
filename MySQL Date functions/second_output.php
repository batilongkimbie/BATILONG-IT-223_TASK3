<?php
include '../database/db.php';

$sql = "SELECT lastname, enrolled_datetime, SECOND(enrolled_datetime) AS extracted_second FROM student_data;";
$result = $conn->query($sql);

echo "<h2>SECOND() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, enrolled_datetime, SECOND(enrolled_datetime) AS extracted_second FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Enrolled Datetime</th>
                <th>Extracted Second</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['enrolled_datetime'] . "</td>
                <td>" . $row['extracted_second'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
