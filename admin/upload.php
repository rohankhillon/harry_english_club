<?php

	include("model.php");
	$db = new database;
	session_start();
if($_GET["value"]=="news")
				{
					
					
					$n_news = $_POST['news'];
					$n_date = $_POST['date'];
						echo $n_news;
						echo $n_date;
					if(isset($_POST["submit"]))
					{
							
							$r=$db->uploadnews($n_news,$n_date);
							if($r>0)
						{
								header("Location:news.php?reply='sucess'");
						}
						else
						{
							header("Location:news.php?reply='failure'");
								
						}
						
					}
				}
else if($_GET["value"]=="gallery")
			{
				
				
				$ititle = $_POST['i_title'];
				$idesc = $_POST['i_desc'];
				
				$file = $_FILES['file'];
				$filename = $file['name'];
				$filetmp = $file['tmp_name'];
				$file_ext = explode('.',$filename);
				$file_ext = strtolower(end($file_ext));
				$file_name_new = uniqid('',true) .'.'. $file_ext;
				$file_destination = '../images/' .$file_name_new;
				move_uploaded_file($filetmp, $file_destination);
				
				if(isset($_POST["submit"]))
				{
						
						$r=$db->upload($ititle,$idesc,$file_destination);
						if($r>0)
					{
							
							header("Location:gallery.php?reply='sucess'");
					}
					else
					{
						?>
							<?php echo $adm_no;?><br/>
							<?php echo $msg_id; ?><br/>
							<?php echo $reply_msg; ?><br/>
							<?php echo $designation; ?><br/>
							<?php echo $file_destination;
							
					}
					
				}
			}	


?>