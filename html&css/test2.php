<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="UTF-8">
        <title>挨拶</title>
    </head>
    <body>
        <form action="test2.php" method="POST">
            <label>ニックネーム<input type="text" name="target_nickname"></label><br>
            <label>誕生日<input type="date" name="target_birthday"></label>
            <input type="submit" value="送る">
        </form>
        <p><?php print $_POST["target_nickname"]?>の誕生日は、<?php print $_POST["target_birthday"]?>。</p>
    </body>
