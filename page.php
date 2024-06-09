<?php
$sql = "SELECT * FROM shaqra";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "اسم: " . $row["اسم"] . "<br>";
        echo "خالد: " . $row["خالد"] . "<br>";
    }
} else {
    echo "لا توجد بيانات.";
}

mysqli_close($conn);
?>