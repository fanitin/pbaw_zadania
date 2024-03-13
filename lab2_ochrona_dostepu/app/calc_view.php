<?php ?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
</head>

<body>
    <div style="width:90%; margin: 2em auto;">
        <a href="<?php print(_APP_ROOT); ?>/app/other_secured.php" class="pure-button button-secondary">Kolejna chroniona strona</a>
        <a href="<?php print(_APP_ROOT); ?>/app/secure/logout.php" class="pure-button button-warning">Wyloguj</a>
    </div>

    <div style="width:90%; margin: 2em auto;">
        <form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <fieldset> 
                <label for="id_kwota">Podaj kwotę:</label>
                <input id="id_kwota" type="text" name="kwota" value="<?php out($kwota); ?>" /><br/>
                <label for="id_years">Podaj ilość lat:</label>
                <input id="id_years" type="text" name="years" value="<?php out($years); ?>" /><br/>
                <label for="id_proc">Podaj oprocentowanie:</label>
                <input id="id_proc" type="text" name="proc" value="<?php out($proc); ?>" /><br/>
            </fieldset>
            <input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
        </form>

        <?php if (isset($messages)) {
            if (count($messages) > 0) {
                echo '<ol style="margin:20px; padding:10px 10px 10px 30px; border-radius:5px; background-color:#f88; width:300px">';
                foreach ($messages as $key => $msg) {
                    echo '<li>' . $msg . '</li>';
                }
                echo '</ol>';
            }
        }?>
        <?php if (isset($result)) { ?>
            <div style="margin:20px; padding:10px; border-radius:5px; background-color:#ff0; width:300px">
                <?php echo 'Wynik: '.$result; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>