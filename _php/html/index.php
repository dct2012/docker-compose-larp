<?php
require_once( 'vendor/autoload.php' );

use App\DB;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$Whoops = new Run();
$Whoops->pushHandler( new PrettyPageHandler() );
$Whoops->register();

$DB       = new DB();
$greeting = $DB->getGreeting();

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Docker Compose LARP: Hello World</title>
    <meta name="description" content="Hello World">
    <meta name="author" content="dct2012">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>

<body>
<p><?= $greeting ?></p>
<script src="js/scripts.js"></script>
</body>
</html>
