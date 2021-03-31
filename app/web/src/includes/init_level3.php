<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level2`');
array_push($qs, 'drop table if exists `database`.`level3_products`');
array_push($qs, 'create table `database`.`level3_products` (product text, price float)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Tazza PMS", 15)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Tazza PMS nera ", 20)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Strickers PMS", 15)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Maglietta PMS", 25)');
array_push($qs, 'insert into `database`.`level3_products` (product, price) values ("Exploit Super Segreto 0day", 300)');
array_push($qs, 'drop table if exists `database`.`level3_users`');
array_push($qs, 'create table `database`.`level3_users` (username text, password text)');
array_push($qs, 'insert into `database`.`level3_users` (username, password) values ("admin", "Visita -> n1c3_leVEl4.php !")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
