<?php
    date_default_timezone_set("Asia/kolkata");
    $time = date("h:i:sa");;
    echo 'Your session is closed and you loggedout at '.$time;

?>
<form action="Login Page.php">
                        
      <button type="submit" name="close">Logout</button>
</form>