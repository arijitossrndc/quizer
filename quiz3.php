<?php
session_start();
 if( $_SERVER['REQUEST_METHOD'] == 'POST' )
 {
 	 if(isset($_POST['click']) && !empty($_POST['click']))
   {
   	$count= count($_POST['click']);
   	echo "out of 9 you have selected" .$count."options" ;
 }
}


?>