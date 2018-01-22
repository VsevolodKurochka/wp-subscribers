<?php 
/*Template Name: Thx Page*/

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	vak_insert_subscribers_table($_POST);
}

?>