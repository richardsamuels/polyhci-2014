<?php
//Derived from the official PHP manual's sample code.
// Connecting, selecting database
$db = pg_connect(getenv('DATABASE_URL'))
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM people';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
	var_dump($line);
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);
?>
<form action="insert.php" method="POST">
<input name="f" type="text" />
<input name="l" type="text" />

<input type="submit" value="insert" />
</form>
<?php

// Closing connection
pg_close($db);
?>
