<?php
session_start();
if(empty($_SESSION["adm_no"]) && empty($_SESSION["pass"]))
	{
		header("Location:index.php?ajaxmas=wHgfghks^^%&fnjfskjdfb");
		
	}
	
	if(isset($_GET["relpy"]))	
	{
	$reply=$_GET["reply"];
	}

?>
<html>
<head>
<title>Admin</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />
<style>
table, th, td {
    border: 1px solid black;
	margin-left:20%;
	margin-bottom:100px;
	padding-left:10px;
	padding-right:10px;
}
</style>
</head>
<body>
<div class="container">
<a href="menu.php"><img src="home.png"></a></h3><h1> Upload News</h1> <h3>
<h1>
<?php 
if($_GET["reply"]=="noimage")
{
	echo "No News Selected";
}
else if($_GET["reply"]=="success")
{
	echo "News Uploaded Successfully";
}
	
	?></h1>
	<div class="signin">
     	<form action="upload.php?value=news" method="POST" enctype="multipart/form-data">
	      	<input type="text" name="news" class="user" placeholder="Enter News here"  />
			<input type="text" name="date" class="user" placeholder="Enter Date Here"   required>
	      	
	      	
          	<input type="submit" value="Upload News" name="submit"/>
	 	</form>
	</div>
</div>

		<div class="team-dot">
			<div class="container">
				<div class="w3ls-heading team-heading">
					<h1>Preview </h1>
				</div>
				<table><tr><td>Date</td> <td>News</td> <td> Action</td></tr>
				<?php
				include("model.php");
				$db = new database;
				$r=$db->news();
				while($row=mysql_fetch_array($r))
				{
				?>
	
				
				<tr>	<td><?php echo $row['2'];?></td><td><?php echo $row['1'];?></td>
				
				<td>		<a href="deletenews.php?id=<?php echo $row["0"]?>">Delete</a></td> </tr>
								 <div class="team_info">
								
							</div>
						</div>
						
					</div> 
					
				
				<?php 
				}
				?>
					</table>
				</div>				
			</div>
		</div>
</body>
</html>