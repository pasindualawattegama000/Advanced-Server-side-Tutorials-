<?php

$cw1Mark = $_POST['cw1'];
$cw2Mark = $_POST['cw2'];

$result = ($cw1Mark * 0.4) + ($cw2Mark * 0.6);

echo "<h1>Results</h1> <br>";

echo "Student Marks: {$result} <br> <br>" ;

echo "<a href = 'index.html'> Back to Home </a>";