<?php
session_start();
if(empty($_SESSION["adm_no"]) && empty($_SESSION["pass"]))
	{
		header("Location:index.php?ajaxmas=wHgfghks^^%&fnjfskjdfb");
		
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

</head>
<body>
<div class="container">
<a href="menu.php"><img src="home.png"></a></h3><h1> Upload Gallery</h1> 
<h1>
<?php 
if($_GET["reply"]=="noimage")
{
	echo "No image Selected";
}
else if($_GET["reply"]=="success")
{
	echo "Image Uploaded Successfully";
}
	
	?></h1>
	<div class="signin">
     	<form action="upload.php?value=gallery" method="POST" enctype="multipart/form-data">
	      	<input type="text" name="i_title" class="user" value="Enter Title here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Title Of image';}"  />
			<input type="text" name="i_desc" class="user" value="Enter Description here"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Desc Of image';}" required>
	      	
	      	<input type="file" name="file" required>
          	<input type="submit" value="Upload" name="submit"/>
	 	</form>
	</div>
</div>

		<div class="team-dot">
			<div class="container">
				<div class="w3ls-heading team-heading">
					<h1>Preview </h1>
				</div>
				<?php
				include("model.php");
				$db = new database;
				$r=$db->gallery();
				while($row=mysql_fetch_array($r))
				{
				?>
	
				<div class="team_gds" >
					<div class="col-md-3 team_gd1" style="width:175px;height:300px;float:left;">
						<div class="team_pos">
							<div class="team_back"></div>
							<img class="img-responsive" src="../images/<?php echo $row['2']?>" style="width:175px;height:175px;" alt=" ">
							<a href="delete.php?id=<?php echo $row["0"]?>">Delete</a>
								<h4><?php echo $row["1"];?></h4>
						<p><?php echo $row["3"];?></p> <br/><div class="team_info">
								
							</div>
						</div>
						
					</div> 
					
				
				<?php 
				}
				?>
						<div class="clearfix"></div>	
				</div>				
			</div>
		</div>
</body>
</html>