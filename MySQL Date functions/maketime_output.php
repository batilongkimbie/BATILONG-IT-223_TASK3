<?php
include '../database/db.php';

$sql = "SELECT lastname, MAKETIME(HOUR(enrolled_datetime), MINUTE(enrolled_datetime), SECOND(enrolled_datetime)) AS made_time FROM student_data;";
$result = $conn->query($sql);

echo "<h2>MAKETIME() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, MAKETIME(HOUR(enrolled_datetime), MINUTE(enrolled_datetime), SECOND(enrolled_datetime)) AS made_time FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Made Time</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['made_time'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
