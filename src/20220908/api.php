<?php

$dbconn = pg_connect("host=pg-bd dbname=per user=user password=example")
    or die('Could not connect: ' . pg_last_error());

$query = "SELECT id, nome, usuario FROM usuarios";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<table>";
$first = true;
while($line = pg_fetch_array($result, null, PGSQL_ASSOC)){
    if($first){
        echo "<tr>";
        foreach ($line as $key => $value) {
            echo "<th>".$key."</th>";
        }
        echo "</tr>";
        $first = false;
    }
    echo "<tr>";
    foreach ($line as $key => $value) {
        echo "<td>".$value."</td>";
    }
    echo "</tr>";
}
echo "</table>";