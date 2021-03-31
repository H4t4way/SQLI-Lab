<?php
require_once('includes/config.php');
require_once('includes/functions.php');
require_once('includes/init_level4.php');
include 'includes/head.php';
?>

<h2>Level 4</h2>
<img src="https://i.pinimg.com/originals/ea/39/cf/ea39cf119f0e9030a5a088485d3dbc5f.gif" style="float:left;margin:0px 20px" alt="" width="333" height="222">
<p class="synopsis">Ma guarda che bel blog, Riesci a leggere qualche articolo?. Forse puoi fare di piu?</p>
<!-- la UNION europea e' diversa dalla UNION Sovietica. -->

<h2>Seleziona un articolo :</h2>
<div class="list">
    <a class="button small green" href="?id=1">1</a>
    <a class="button small green" href="?id=2">2</a>
    <a class="button small green" href="?id=3">3</a>
</div>
<hr>
<br>
<br>
<?php

if(isset($_GET["id"])) {
    $db = connect_db();
    $a = $_GET["id"];
    $q = "select * from level4_articles where id='$a'";
    $r = $db -> query($q);
    $db -> close();
    echo "<article>";
    if($r -> num_rows > 0) {
        while($res = $r -> fetch_row()) {
            echo "<!-- $res[0] --><h3>$res[1]</h3><p>$res[2]</p>";
        }   
    }
    echo "</article>";
}

?>

<?php include 'includes/footer.php'; ?>
