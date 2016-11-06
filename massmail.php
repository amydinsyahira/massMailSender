<?php
  
  include "header.php"; 
  include "config.php"; 
 
 if(isset($_POST['submit']))
  {
  $seconds=$_POST['seconds'];
  $subject=$_POST['subj'];
  $messagesend=$_POST['message'];
  	    mysql_connect($server, $db_user, $db_pass)
      or die ("Database CONNECT Error"); 
 		$resultquery = mysql_db_query($database, "select * from $table");
		
    while ($query = mysql_fetch_array($resultquery)) 
    { 
    	$emailinfo=$myemail;  	
    	$mailto=$query[$table_email];
     	mail($mailto, $subject, $messagesend , "From:".$fromadmin."\nReply-To:".$fromadmin."\n"); 
		echo 'Mail sent to '.$mailto.'<br>';
        sleep($seconds);
    }
    echo 'Mails sent. Go <a href="massmail.php">Back</a>';
  }
  else 
  {
  ?>
<table height="250" cellpadding="1">
<tr><td valign="top">
<h2>Free Mass Mail Sender</h2><br><form action="massmail.php" method="POST">

              <div align="center"> 
              <table cellpadding="0" border="0" align="left">
              <tr>
              <td>
              Subject:
              </td>
              <td>
              <input type="text" align="left" name="subj" size="66">
              </td>
              </tr>
              <tr><td align="left" valign="top">
                Message Text:</td><td align="left"> <textarea name="message" rows="15" cols="60"				></textarea></td></tr>
				<tr>
                <tr><td colspan="2" align="left">
				Seconds between messages:<input type="text" size="10" name="seconds" value="0.1"> (seconds)
					</td></tr>
				<tr><td colspan="2">	
                <input type="submit" value="Send mass mails" name="submit" >
                </Td>
                </tr>
				
                </table>
              </div>
</td>
</tr>
</table>
  
<?php
  }
  include "footer.php";    
?>