<?php 

if ($_POST["Email"]<>'')
    {
        $to = "yogeshkamboj123@gmail.com";
        $to_name = $_POST['Name'];
        $gemail = "Email: ".$_POST["Email"]."<br />";
        $mname = $_POST["Name"];        
        $mmobile = "Mobile: ".$_POST["Phn"]."<br />";
        $mcomment = "Comment: ".$_POST["Message"]."<br />";
       
        
        $message1 = "Thank you for your interest in the Water Digest Water Awards 2018.We regret to inform you that entries for this year have been closed. We look forward to your participation in the future.";
        $subject = "Regarding Enquiry";
        $subject1 = "Award";
        $to1 = $_POST['Email'];
        $content = "Name: $mname, <br />$gemail <br /> $mmobile <br / >  \$mcomment ";
        $content1 = "Dear $mname, <br /><p>$message1</p><br />Thank You!";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <studyabroad@harryenglishclub.com>' . "\r\n";

        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers1 .= 'From: <studyabroad@harryenglishclub.com>' . "\r\n";
        //$headers .= 'Cc: myboss@example.com' . "\r\n";
        $mail = mail($to, $subject, $content, $headers);
       if($mail)
        {			
			
           echo "Mail Sent Successfully! Thank you for contacting us. We will be right back to you as soon as possible.";
          $mail1 = mail($to1, $subject1, $content1, $headers1);
           if($mail1)
           { 
		?>
   Mail Sent Successfully! Thank you for contacting us. We will be right back to you as soon as possible.
         <?php  }            
      }
           else
      {?>
           Mail Not Sent!
        <?php }
    }
 ?>