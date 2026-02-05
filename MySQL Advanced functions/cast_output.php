<?php
include '../database/db.php';

$sql = "SELECT lastname, units, CAST(units AS CHAR) AS units_char FROM student_data;";
$result = $conn->query($sql);

echo "<h2>CAST() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, units, CAST(units AS CHAR) AS units_char FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Units</th>
                <th>Units Char</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['units'] . "</td>
                <td>" . $row['units_char'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
