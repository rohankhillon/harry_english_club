<?php
		include("model.php");
		$db = new database;
		$id=$_GET["id"];
		
		$r=$db->deletenews($id);
        header("Location:news.php?reply='deleted'");

?>