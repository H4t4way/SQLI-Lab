<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level4_articles`');
array_push($qs, 'drop table if exists `database`.`level4_users`');
array_push($qs, 'create table `database`.`level5` (username text, password text)');
array_push($qs, 'insert into `database`.`level5` (username, password) values ("admin", "a94dc7d578c98d16eb719dbeefc705c3")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
