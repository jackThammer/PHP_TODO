<?php
/*
 Author: jackThammer
 */

require 'db.php';

$db = new Db();
$response = $db->delete_by_id($_GET['id']);
header("Location: todo.php");

