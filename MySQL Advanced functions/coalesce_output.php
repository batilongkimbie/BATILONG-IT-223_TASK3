<?php
include '../database/db.php';

$sql = "SELECT lastname, program, COALESCE(units, grade, enrolled_datetime) AS non_null_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>COALESCE() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, program, COALESCE(units, grade, enrolled_datetime) AS non_null_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Program</th>
                <th>Non-Null Value</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['program'] . "</td>
                <td>" . $row['non_null_value'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
