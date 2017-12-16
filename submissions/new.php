<?php

// session_start();
// $token = md5(time() . rand(1,100));
// $_SESSION['token'] = $token;
// <input type='hidden' name='token' value=' $token; '/>

?>

<form method="POST" action="submissions/create.php">
     <label>
       Name:<br>
       <input type="name" name="subject">
     </label>
     <label>
       Title:<br>
       <textarea name="title"></textarea>
     </label>
     <label>
       Abstract:<br>
       <textarea name="abstract"></textarea>
     </label>
     <br />
     <input type="submit" value="Submit">
 </form>
