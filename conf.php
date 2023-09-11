<?php

/*  mysql_connect("localhost","root","") or die(mysql_error());
 mysql_select_db("db_test")or die(mysql_error()); */

 try {
    $strconnetion = 'mysql:host=localhost;dbname=db_test';
    $pdo= new PDO($strconnetion,'root','');
 } catch (PDOException $e) {
    $msg='Erreur PDO' . $e->getMessage();
    die($msg);
 }
 ?>