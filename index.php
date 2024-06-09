<!DOCTYPE html>
<html>
<head>
  <title>DATABASE</title>
</head>
<body>

<?php
$host = "localhost";
$username = "root";
$password = "123456";
$dbname = "shaqra";
$sql = "SELECT * FROM `shaqra`;";


$connect_database = mysqli_connect($host, $username, $password, $dbname);
$r = mysqli_query($conn, 'select * from syaqra');
?>
<from method='POST'>
    <center>
        <table> border="i">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>Address</th>
</tr>
<?php
while ( $row = mysqli_fetch_array($r)){
    echo'<tr>';
    echo'td'.$row['id'].'</td';
    echo'td'.$row['name'].'</td';
    echo'td'.$row['address'].'</td';
    echo'</tr>';
    
}
?>
</table>
</center>
</from>
</body>
</html>

