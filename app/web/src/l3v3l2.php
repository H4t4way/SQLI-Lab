<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level2.php');
include 'includes/head.php';
?>

<h2>Level 2</h2>
<img src="https://media.giphy.com/media/gbZdMzeMtxJXW/giphy.gif" style="float:left;margin:0px 20px" alt="GG" >
<p class="synopsis">Hey siamo in una pagina di login. Sappiamo che la password di admin potrebbe essere interessante.</p>

<form method="post">
    <input type="text" name="username" placeholder="username" required>
    <input type="password" name="password" placeholder="password" required>
    <input class="button small green" type="submit" value="Retrieve infos">
</form>

<?php

if(isset($_POST["username"])) {
    $db = connect_db();
    $a = $_POST["username"];
    $b = $_POST['password'];
    $q = "select * from level2 where username='$a' and password='$b'";
    $r = $db -> query($q);
    $db -> close();
    echo "<table><tr><th>Username</th><th>Email</th><th>Password</th></tr>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<tr><td>$res[0]</td><td>$res[1]</td><td>$res[2]</td></tr>";
        }   
    }
    echo "</table>";
}

?>

<?php include 'includes/footer.php'; ?>
