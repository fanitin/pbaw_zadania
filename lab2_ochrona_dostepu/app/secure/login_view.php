<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>
    <div style="width:85%; margin: 2em auto">
        <form action="<?php print(_APP_ROOT); ?>/app/secure/login.php" method="post" class="pure-form">
            <legend>Logowanie</legend>
            <fieldset>
                <label for="id_login">Login: </label>
                <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
                <label for="id_pass">Password: </label>
                <input id="id_pass" type="password" name="pass" />
            </fieldset>
            <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
        </form>

        <?php
        if(isset($messages)){
            if(!empty($messages)){
                print('<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">');
                foreach($messages as $key => $msg){
                    print('<li>'.$msg.'</li>');
                }
                print('</ol>');
            }
        }
        ?>
    </div>
</body>
</html>