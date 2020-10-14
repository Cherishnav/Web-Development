<h2>Hello</h2>
<?php
    $time = date("h.i:s",time());
    echo 'You loggedin at '.$time;

?>
<form action="LP.php">
                        
      <button type="submit" name="close">Close Session</button></br>
</form>
