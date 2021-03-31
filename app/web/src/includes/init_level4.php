<?php

$db = connect_db();
$qs = array();
array_push($qs, 'drop table if exists `database`.`level3_products`');
array_push($qs, 'drop table if exists `database`.`level3_users`');
array_push($qs, 'drop table if exists `database`.`level4_articles`');
array_push($qs, 'create table `database`.`level4_articles` (id int primary key not null auto_increment, title text, content text)');
array_push($qs, 'insert into `database`.`level4_articles` (title, content) values ("Come diventare ricchi in 5 steps", "1. Compra una mela ad 1€,<br> 2. Vendila a  2€,<br> 3. Compra 2 mele a  2€,<br> 4. Win lottery,<br> 5. You are rich now.")');
array_push($qs, 'insert into `database`.`level4_articles` (title, content) values ("Ci avviciniamo alla super Challenge OSCP", "Bhe per partecipare basta iscriversi al sito www.pentestingmadesimple.it")');
array_push($qs, 'insert into `database`.`level4_articles` (title, content) values ("Non saprei che altro dire", "Non sono un dev ma cerco di fare il mio meglio :D")');
array_push($qs, 'drop table if exists `database`.`level4_users`');
array_push($qs, 'create table `database`.`level4_users` (username text, password text)');
array_push($qs, 'insert into `database`.`level4_users` (username, password) values ("admin", "Visita -> yAy_l3veL5.php !")');

foreach($qs as $q) {
    $db -> query($q);
}

$db -> close();

?>
