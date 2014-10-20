<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <style>
#unique {
    color: red;
    background: blue;
    font-style: italic;
}

div.notunique {
    color: blue;
}

p.notunique {
    color: black;
}
        </style>

    </head>
    <body>
        <div id="unique">
<?php 
print "hello world";

//var myvar = 5;
$myvar = 5;

print $_GET['var'];

?>
        </div>
    </body> 
</html>