<?php
// Connecting, selecting database
$db = pg_connect(getenv('DATABASE_URL'))
    or die('Could not connect: ' . pg_last_error());

// Yes this is a terrible idea for production code. 
//Why this is bad falls out of scope of this course,

$query = 'INSERT INTO authors ("fname", "lname") VALUES (\'' . $_POST['f'] . '\', \'' . $_POST['l'] . '\')';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "Inserted";

// Closing connection
pg_close($db);
?>
