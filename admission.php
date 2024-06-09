<?php
include 'db_connection.php'; 
$sql = "SELECT * FROM admission_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["login"]. "</h2>";
        echo "<p>" . $row["description"]. "</p>";
    }
} else {
    echo "لا توجد بيانات عن القبول.";
}
$conn->close();
?>
