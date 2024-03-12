<?php require_once dirname(__FILE__).'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Kalkulator kredytowy</title>
</head>

<body>
    <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
        <label for="id_kwota">Podaj kwotę:</label>
        <input id="id_kwota" type="text" name="kwota" value="<?php isset($kwota) ? print($kwota) : print("Wpisz kwotę"); ?>" /><br/>
        <label for="id_years">Podaj ilość lat:</label>
        <input id="id_years" type="text" name="years" value="<?php isset($years) ? print($years) : print("Wpisz iloś lat"); ?>" /><br/>
        <label for="id_proc">Podaj oprocentowanie:</label>
        <input id="id_proc" type="text" name="proc" value="<?php isset($proc) ? print($proc) : print("Wpisz oprocentowanie"); ?>" /><br/>
        <input type="submit" value="Oblicz"/>
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
</body>
</html>