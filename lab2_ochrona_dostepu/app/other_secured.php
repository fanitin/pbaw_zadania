<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH."/app/secure/check.php";
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Other secured page</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>

<body>
    <div style="width:90%; margin: 2em auto;">
        <a href="<?php print(_APP_ROOT); ?>/app/calc.php" class="pure-button button-secondary">Kolejna chroniona strona</a>
        <a href="<?php print(_APP_ROOT); ?>/app/secure/logout.php" class="pure-button button-warning">Wyloguj</a>
    </div>
    
    <div style="width:90%; margin: 2em auto;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
    </div>	
</body>
</html>