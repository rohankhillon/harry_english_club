<?php
include("model.php");

session_start();

if(isset($_POST["submit"]))
{
	
	$uname=$_POST["u_name"];
	$pword=$_POST["p_word"];
	
	$db = new database;
	$a=$db->checklogin($uname,$pword);
	if($a>0)
	{
				$_SESSION["adm_no"]=$adm;
				$_SESSION["pass"]="you cant hack";
				header("Location:menu.php");
	}
	else
{
	header("Location:index.php?msg=wrong");
}
}
else
{
	header("Location:index.php?msg=wrong");
}
?>