<?php
include '../database/db.php';

$sql = "SELECT firstname, LAST_INSERT_ID(id) AS last_inserted_id FROM student_data;";
$result = $conn->query($sql);

echo "<h2>LAST_INSERT_ID() Function Output</h2>
        <br> <p><b>SQL query: </b>SELECT firstname, LAST_INSERT_ID(id) AS last_inserted_id FROM student_data;</p>
        <br>";

if ($result->num_rows > 0) {
    echo "<table border='1' cellspacing='0' cellpadding='10'>
            <tr>
                <th>Firstname</th>
                <th>Last Inserted ID</th>
            </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['firstname'] . "</td>
                <td>" . $row['last_inserted_id'] . "</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
