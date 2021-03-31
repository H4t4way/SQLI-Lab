<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level1`');
array_push($qs, 'create table `database`.`level1` (password text, site text)');
array_push($qs, 'insert into `database`.`level1` (password, site) values ("ForzaMonkes", "h4t4way.root.sx")');
array_push($qs, 'insert into `database`.`level1` (password, site) values ("sUp3Rpa55w0rD", "hackthebox.eu")');
array_push($qs, 'insert into `database`.`level1` (password, site) values ("Visita -> l3v3l2.php !", "Prossimo-livello.net")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
