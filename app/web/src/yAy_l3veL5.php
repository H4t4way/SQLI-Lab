<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level5.php');
include 'includes/head.php';
?>

<h2>Level 5</h2>
<img src="https://media1.tenor.com/images/fb1faf55e8b7697d6147baea3ce8fcf7/tenor.gif?itemid=17203367" style="float:left;margin:0px 20px" alt="" width="333" height="222">
<p class="synopsis">Vuoi a tutti i costi loggarti sul mio bellissimo sito web?. Va bene, trova la password di admin!</p>
<!-- Una volta che hai la pass - esempio $pass - vai a /$pass.php -->
<!-- Hai mai visto il mio cane BLIND? e' LIKE Idefix. -->

<form method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" placeholder="admin" required>
    <label for="password">Password: </label>
    <input type="text" name="password" placeholder="***" required>
    
    <input class="button small green" type="submit" name="submit" value="Connect">
</form>

<?php

$username = $_POST['username'];
$password = $_POST['password'];
$db = connect_db();
$q = "select * from level5 where username='$username' and password='$password'";
$r = $db -> query($q);
$db -> close();
if($r -> num_rows > 0) {
    echo '<h2>Benvenuto Admin!</h2>';
} else {
    echo '<p>Ouch!! username/password errato.</p>';
}

?>

<?php include 'includes/footer.php'; ?>
