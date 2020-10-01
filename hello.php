<?php

$name=$_GET['name']??'world';

//echo "Hello " . $name. " !";
/* Le header est commenté pour ne pas faire rater le test (mené avec HelloTest.php) */
header('content-type: text/html; charset=UTF-8');
printf ('Hello %s !', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));