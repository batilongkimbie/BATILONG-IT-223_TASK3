<?php
include '../database/db.php';

$sql = "SELECT lastname, units, NULLIF(units, 2) AS nullif_units FROM student_data;";
$result = $conn->query($sql);

echo "<h2>NULLIF() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT lastname, units, NULLIF(units, 2) AS nullif_units FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Last Name</th>
                <th>Original Units</th>
                <th>NULLIF Units</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['lastname'] . "</td>
                <td>" . $row['units'] . "</td>
                <td>" . $row['nullif_units'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
