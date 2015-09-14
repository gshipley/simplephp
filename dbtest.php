<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");
$connection = mysql_connect($dbhost, $dbuser, $dbpwd);
if (!$connection) {
        echo "Could not connect to database!!!";
} else {
        echo "Connected to database.<br>";
}
$dbconnection = mysql_select_db($dbname);
$query = "SELECT * from users";
$rs = mysql_query($query);
while ($row = mysql_fetch_assoc($rs)) {
    echo $row['user_id'] . " " . $row['username'] . "\n";
}
mysql_close();
?>
