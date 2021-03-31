<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level3.php');
include 'includes/head.php';
?>

<h2>Level 3</h2>
<img src="https://thumbs.gfycat.com/MeekForsakenInganue-size_restricted.gif" style="float:left;margin:0px 20px" alt="Carlino" width="333" height="222" >
<p class="synopsis">Un bellissimo shop online, magari qualcosa di nascosto?</p>
<!-- Mai sentito  UNION tra due super saiyan ? -->

<form method="post">
    <input type="text" name="product" placeholder="Tazza...">
    <input class="button small green" type="submit" value="Get prices">
</form>

<!-- SELECT product, price FROM level3_products WHERE product LIKE '%$input%' -->
<?php

if(isset($_POST["product"])) {
    $db = connect_db();
    $a = $_POST["product"];
    $q = "select * from level3_products where product like '%$a%'";
    $r = $db -> query($q);
    $db -> close();
    echo "<table><tr><th>Product</th><th>Price</th></tr>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<tr><td>$res[0]</td><td>$res[1]</td></tr>";
        }   
    }
    echo "</table>";
}

?>

<p>Il Login e' disabilitato al momento. Ma comunque puoi scegliere i prodotti !</p>
<!-- SELECT username, password FROM level3_users WHERE username='$input' AND password='$input2' -->
<?php include 'includes/footer.php'; ?>
