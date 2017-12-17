<form method="POST" action="submissions/create.php">
     <label>
       Name:<br>
       <input name="name" type="text" required>
     </label>
     <label>
       Title:<br>
       <input name="title" type="text" required>
     </label>
     <label>
       Abstract:<br>
       <textarea name="abstract" required></textarea>
     </label>
     <label>
       Contact (your email):<br>
       <input name="email" type="email" required>
     </label>
     <br />
     <input type="submit" value="Submit">
 </form>
