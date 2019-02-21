<?php
		include("model.php");
		$db = new database;
		$id=$_GET["id"];
		$a=$db->calldelete($id);
		while($del=mysql_fetch_array($a))
		{
			$img=$del["2"];
		}
		unlink($img);
		$r=$db->deletegallery($id);
header("Location:gallery.php?reply='deleted'");



?>