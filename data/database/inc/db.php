<?php
echo date("H:i:s");

$dbh = mysql_connect("rdbms.strato.de", "U3846798", "Datenbank1");
$query = "use DB3846798";
if (!mysql_query($query, $dbh)) die("Datenbank existiert nicht.");

<FilesMatch \.php$>
SetHandler application/x-httpd-php
</FilesMatch>

?>
