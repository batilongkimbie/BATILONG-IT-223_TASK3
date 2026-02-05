<?php
include '../database/db.php';

$sql = "SELECT lastname, grade, IF(grade > 80, 'Pass', 'Fail') AS result FROM student_data;";
$result = $conn->query($sql);

echo "<h2>IF() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, grade, IF(grade > 80, 'Pass', 'Fail') AS result FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Grades</th>
                <th>Result</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['grade'] . "</td>
                <td>" . $row['result'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
