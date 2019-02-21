
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
<h1> Menus</h1> 

	<div class="signin">
     	<form action="news.php" method="POST" enctype="multipart/form-data">	      	
          	<input type="submit" value="News" name="submit"/>
	 	</form>
		<form action="gallery.php" method="POST" enctype="multipart/form-data">	      	
          	<input type="submit" value="Gallery" name="submit"/>
	 	</form>
	</div>
</div>

		
					</table>
				</div>				
			</div>
		</div>
</body>
</html>