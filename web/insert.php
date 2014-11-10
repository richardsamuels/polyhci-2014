<?php
// Connecting, selecting database
$db = pg_connect(getenv('DATABASE_URL'))
    or die('Could not connect: ' . pg_last_error());

// This is, without exaggeration, the worst possible way to do this for production code.
//
$query = 'INSERT INTO people ("fname", "lname") VALUES (\'' . $_POST['f'] . '\', \'' . $_POST['l'] . '\')';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "Inserted";

// Closing connection
pg_close($db);
?>
