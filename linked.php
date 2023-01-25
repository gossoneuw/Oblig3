<?php
    date_default_timezone_set('Europe/Copenhagen');
    include 'dbh.inc.php';
    include 'comments.inc.php';
    

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Password protected</title>
</head>
<body>
    <div style="text-align:center;margin-top:50px;">
        you have come to the new sitee
        <form method="POST">
            <input type="text" name="password">
        </form>
    </div>
    <?php
       echo "<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form>";

        getComments($conn, $meldinger);
    ?>
</body>
</html>