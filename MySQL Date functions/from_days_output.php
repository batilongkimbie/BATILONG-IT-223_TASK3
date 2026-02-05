<?php
include '../database/db.php';

$sql = "SELECT lastname, FROM_DAYS(TO_DAYS(enrolled_datetime)) AS converted_date FROM student_data;";
$result = $conn->query($sql);

echo "<h2>FROM_DAYS() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, FROM_DAYS(TO_DAYS(enrolled_datetime)) AS converted_date FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Converted Date</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['converted_date'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
