<?php
include '../database/db.php';

$sql = "SELECT lastname, YEAR(enrolled_datetime) AS year, DAYOFYEAR(enrolled_datetime) AS day_of_year, MAKEDATE(YEAR(enrolled_datetime), DAYOFYEAR(enrolled_datetime)) AS made_date FROM student_data;";
$result = $conn->query($sql);

echo "<h2>MAKEDATE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, enrolled_datetime, MAKEDATE(YEAR(enrolled_datetime), DAYOFYEAR(enrolled_datetime)) AS made_date FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Year Enrolled</th>
                <th>Day of Year</th>
                <th>Made Date</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['year'] . "</td>
                <td>" . $row['day_of_year'] . "</td>
                <td>" . $row['made_date'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
