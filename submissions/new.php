<?php

// session_start();
// $token = md5(time() . rand(1,100));
// $_SESSION['token'] = $token;
// <input type='hidden' name='token' value=' $token; '/>

?>

<html>
    <body>
        <form method="POST" action="create.php">
            <label>
              Oggetto:
              <input type="text" name="subject">
            </label>
            <br />
            <label>
              Testo:
              <textarea name="body"></textarea>
            </label>
            <br />
            <input type="submit" value="Submit">
        </form>
    </body>
</html>