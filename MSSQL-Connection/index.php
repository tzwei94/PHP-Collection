<?php
$server = "Server";
$user = "Username";
$password = "Password";
$db = "Database";

// sqlsrv
/* 
$connectionInfo = array("Database" => $db, "UID" => $user, "PWD" => $password);
$conn = sqlsrv_connect($server, $connectionInfo);

if ($conn === false) {
die(print_r(sqlsrv_errors(), true));
}

$sql = "SELECT * FROM dbo.TestTable";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
die(print_r(sqlsrv_errors(), true));
}

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
echo $row['id'] . "<br />";
}

sqlsrv_free_stmt($stmt); 
*/

// PDO
/* 
try {

    $connection = new PDO("sqlsrv:Server=" . $server . ";Database=" . $db, $user, $password);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $connection->query("SELECT * FROM dbo.TestTable");
    while ($row = $stmt->fetch()) {
        echo $row['id'] . "<br />\n";
    }

} catch (PDOException $exception) {
    var_dump($exception);
}
 */