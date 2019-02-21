<?php
class database
{
	function __construct()
	{
		$con=mysql_connect("localhost","aggarp9c_sunil","sunil786$") or die(mysql_error());
		mysql_select_db("aggarp9c_hec",$con)or die(mysql_error());
	}
		
	function gallery()
	{
		$r=mysql_query("select * from gallery ");
		return $r;
	}
	function checklogin($a,$b)
	{
		$r=mysql_query("select * from admin where u_name='$a' and p_word='$b'");
		 $row=mysql_fetch_array($r);
		 
	 if($row>0)
	 {
		 return 1;
	 }
	 else
	 {
		 return 0;
	 }
	}
	function upload($a,$b,$c)
	{
		$r=mysql_query("insert into gallery(`name`, `path`, `desc`) values ('$a', '$c', '$b')");
		return $r;	 
	}
	function calldelete($a)
	{
			$r=mysql_query("select * from gallery where id='$a' ");
			return $r;	
	}	
	function deletegallery($a)
	{
		$r=mysql_query("delete from gallery where id='$a'");
		return $r;
	}
	function news()
	{
		$r=mysql_query("select * from news");
		return $r;
	}	
	function uploadnews($a,$b)
	{
		$r=mysql_query("insert into news(`news`, `d`) values ('$a', '$b')");
		return $r;	
	}
	function deletenews($a)
	{
		$r=mysql_query("delete from news where id='$a'");
		return $r;
	}
}
?>		