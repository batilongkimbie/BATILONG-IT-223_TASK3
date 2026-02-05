<?php
include '../database/db.php';

$sql = "SELECT lastname, units, CONV(units, 10, 2) AS binary_value FROM student_data;";
$result = $conn->query($sql);

echo "<h2>CONV() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, units, CONV(units, 10, 2) AS binary_value FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Units</th>
                <th>Binary Value</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['units'] . "</td>
                <td>" . $row['binary_value'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
