<?php
	function get_header(){
		require_once("includes/header.php");
	}
	function get_bread(){
		require_once("includes/breadcumb.php");
	}
	function get_bread_two(){
		require_once("includes/breadcumb_two.php");
	}
	function get_bread_three(){
		require_once("includes/breadcumb_three.php");
	}
	function get_bread_four(){
		require_once("includes/breadcumb_four.php");
	}
	function get_bread_five(){
		require_once("includes/breadcumb_five.php");
	}
	function get_bread_six(){
		require_once("includes/breadcumb_six.php");
	}
	function get_bread_seven(){
		require_once("includes/breadcumb_seven.php");
	}
	function get_sidebar(){
		require_once("includes/sidebar.php");
	}
	function get_part($addpart){
		require_once("includes/".$addpart);
	}
 	function get_footer(){
		require_once("includes/footer.php");
	}
?>