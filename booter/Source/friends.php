<?php 
require("header.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<title>Home</title>

	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<meta name="keywords" content="" />	
	<meta name="description" content="" />
	<meta name="robots" content="" /><!-- change into index, follow -->
				
	<link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
	
	<!--[if lte IE 6]>
		<script type="text/javascript" src="javascripts/pngfix.js"></script>
		<script type="text/javascript" src="javascripts/ie6.js"></script>
		<link rel="stylesheet" href="stylesheets/ie6.css" type="text/css" />
	<![endif]-->

</head>

<body>

<!--  / WRAPPER \ -->
<div id="wrapper">
	
    <!--  / MAIN CONTAINER \ -->
    <div id="mainCntr">

		<!--  / HEADER CONTAINER \ -->
		<div id="headerCntr">
		
			<h1><a href="#">Web Jet</a></h1>
			  
			<!-- / MENU CONTAINER \ -->
			<div id="menuCntr">
			
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="hub.php" class="active">DDoS Attack</a></li>
					<li><a href="mysettings.php">My Account</a></li>
					<li><a href="pinger.php">Pinger</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				
			</div>
			<!-- \  MENU CONTAINER  /-->
			
		</div>
		<!--  \ HEADER CONTAINER / -->
			
		  <!--  / HAEDING BOX \ -->
		<div class="headingBox">
			<div class="heading">
			
			<h2>Friends</h2>
			
			</div>
        </div>
		<!--  \ HAEDING BOX / -->
			  
       
		
        <!--  / CONTENT CONTAINER \ -->
        <div id="contentCntr" class="background">
			<div class="center">
			<!--  / LEFT CONTAINER \ -->
			<div id="leftCntr">
				

                    
                    
					<!--  / OUR BLOG BOX \ -->
					<div class="ourbloginnerBox">
						<div class="top">
							<div class="bottom">
								
                    
                    






<div id="right">
<div class="small-box"><h2>Welcome, <?php echo $username; ?>!</h2>
    <div class="small-box-content">
        <p>
        Profile ID: <font color="#a5a5a5"><?php echo $id; ?></font> <br />
        Rank: <font color="#a5a5a5"><?php echo $level; ?></font> <br />
        My IP: <font color="#a5a5a5"><?php echo $_SERVER["REMOTE_ADDR"]; ?></font> <br />
        My Attacks: <font color="#a5a5a5"><?php
    $query = mysql_query("SELECT * FROM `users` WHERE id='$id' ");
    while($row = mysql_fetch_array($query)){
    $attacks = $row['myAttacks'];
    echo $attacks;
    }
?></font>
        </p>

    </div></div>
<span style="line-height:1.2em;">
        <div class="small-box"><h2>Members Statistics</h2>
    <div class="small-box-content">
        <p>


                    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="forms">
                        <font size=1>
          <tr>
            <td><font color="#575757">Total Users</font></td>
            <td><?php echo $all; ?></td></tr></font>
          

          <tr>
            <td><font color="#575757">Active Users</font></td>
            <td><?php echo $active; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">Pending Users</font></td>
            <td><?php echo $total_pending; ?></font></td>
          </tr>
          <tr>
            <td><font color="#575757">Total Attacks</font></td>
            <td><?php
                   $result = mysql_query("SELECT * FROM logs", $link);
                   $num_rows4 = mysql_num_rows($result);
                   echo "$num_rows4";
                ?></font></td>
          </tr>
                    </font>
                    </table>
        </p>


    </div></div>

    <div class="small-box"><h2>Shells Statistics</h2>
    <div class="small-box-content">
        <p>


                    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="forms">
                        <font size="1">
                                      <tr>
            <td><font color="#575757">Shell Rotation</font></td>
            <?php
            if($shellRotation == 0) { ?>
            <td><font color="red">(Off)</font></td>
            <?php } else { ?>
            <td><font color="#00bc00">(On)</font></td>
            <?php
            }
            ?>
           
          </tr>
          
          <tr>
            <td><font color="#575757">Shells Online</font></td>
            <td><font color="#00bc00"><?php echo $shellsOnline; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">GET Shells</font></td>
            <td><font color="#00bc00"><?php echo $num_rows; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">POST Shells</font></td>
            <td><font color="#00bc00"><?php echo $num_rows2; ?></font></td>
          </tr>

          <tr>
            <td><font color="#575757">Slowloris Shells</font></td>
            <td><font color="#00bc00"><?php echo $num_rows3; ?></font></td>
          </tr>
                        </font>
                    </table>
        </p>

</span>
    </div></div>
</div>

      
                    
                    
                    
                    
                    

					
							</div>
						</div>	 
					</div>
					<!--  / OUR BLOG BOX \ -->
					
					<!--  / OUR BLOG BOX \ -->
					<div class="ourbloginnerBox">
						<div class="top">
							<div class="bottom">
									
							<h2>Chat Member</h2>
							
							<object width="250" height="425" id="obj_1298661493293"><param name="movie" value="http://PostBooterchat.chatango.com/group"/><param name="wmode" value="transparent"/><param name="AllowScriptAccess" VALUE="always"/><param name="AllowNetworking" VALUE="all"/><param name="AllowFullScreen" VALUE="true"/><param name="flashvars" value="cid=1298661493293&b=60&f=50&l=999999&p=10&q=999999&r=100&s=1"/><embed id="emb_1298661493293" src="http://PostBooterchat.chatango.com/group" width="250" height="425" wmode="transparent" allowScriptAccess="always" allowNetworking="all" type="application/x-shockwave-flash" allowFullScreen="true" flashvars="cid=1298661493293&b=60&f=50&l=999999&p=10&q=999999&r=100&s=1"></embed></object><br>
							
                            
							</div>
						</div>	 
					</div>	
                    <p>&nbsp;</p>
					<!--  / OUR BLOG BOX \ -->
				
			</div>
			<!--  \ LEFT CONTAINER / -->
			
			<!--  / RIGHT CONTAINER \ -->
			<div id="rightCntr">
				
				<!--  / ABOUT BOX \ -->
				<div class="aboutBox">
				<h3>Friends</h3>
				<p class="first"><strong>Donate</strong>: If you feel generous enough to donate to us, to make the booter stronger click the Donate tab ! -Thanks.</p>
                
</div>
					


              
              
   <?php
		//Start session
	session_start();
	//Check whether the session variable
	//SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id'])=='')) {
		header("location: login.php");
		exit();

}

$query = "SELECT * FROM users WHERE id={$_SESSION['user_id']}";
$result = mysql_query($query);
$row = mysql_fetch_array($result, MYSQL_ASSOC);
$localuser = $row['username'];
 

if (isset($_POST['Submit'])){
	if (!filter_var($_POST['friendip'], FILTER_VALIDATE_IP)){
		echo "The entered IP address is invalid.";
	}else{
		$addFriendIP = $_POST['friendip'];
		$addFriendNote = mysql_real_escape_string($_POST['friendnotes']);
		$friendSQL = "INSERT INTO friends (ip,notes,friend)VALUES ('$addFriendIP','$addFriendNote','$localuser')";
		mysql_query($friendSQL) or die(mysql_error());
		echo "Successfully added " . $addFriendIP . " to your friend list.";
	}
}

if(isset($_POST['delete'])){
	$checkbox=$_POST['checkbox'];
	for($i=0;$i<count($checkbox);$i++){
		$del_id = $checkbox[$i];
		$sql = "SELECT * FROM friends where id='$del_id'";
		$query = mysql_query($sql);
		$friendInfo = mysql_fetch_array($query, MYSQL_ASSOC);
		if ($friendInfo['friend'] == $localuser){
			$sql = "DELETE FROM friends WHERE id='$del_id'";
			$result = mysql_query($sql);
		}
	}
	echo 'Selected friends have been deleted.';
}
?>


<link rel="stylesheet" href="style1.css" type="text/css">


<h2>&nbsp;</h2>
<h2>Add New Friend</h2>
<p>&nbsp;</p>
<div class="box-content">

<form name="friendlist" action="" method="post">
<table width="50%" class="table" align="center">
  <tr>
    <td colspan="2" align="center" valign="middle" class="head"><div align="left">
      <p><strong>Friend IPs :</strong></p>
 <p>&nbsp;</p>
    </div></td>
  </tr>
  <tr>
    <td width="23%" height="24" align="right" valign="middle" class="cell"><strong>IP Address : &nbsp;</strong></td>
    <td width="35%" valign="middle" class="cell" align="left"><input class="entryfield" name="friendip" type="text" id="friendip"></td>
  </tr>

  <tr>
    <td width="23%" height="44" align="right" valign="middle" class="cell"><strong>Notes : &nbsp;</strong></td>
    <td width="35%" valign="middle" class="cell" align="left"><input class="entryfield" name="friendnotes" type="text" id="friendnotes"></td>
  </tr>

  <tr>
    <td valign="middle" colspan="2" class="cell" align="left"><input class="button" type="submit" name="Submit" value="Submit"></td>
  </tr>
</table></form>

</div>


<p><br>
  
  </p>
<div class="box-content">
<div align="center">
  <form name="form1" method="post" action="">

<table width="90%" class="table">

    <tr>

      <td width="10%" height="26"><div align="center" class="head"><strong>Select</strong></div></td>

      <td width="25%"><div align="center" class="head"><strong>IP Address</strong></div></td>

      <td width="65%"><div align="center" class="head"><strong>Notes</strong></div></td>	  
      </tr>

    <?php

$query="SELECT * FROM friends WHERE friend='$localuser'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result, MYSQL_ASSOC)){

$friendip = $row['ip'];
$friendnotes = $row['notes'];

?>

    <tr>

      <td height="44" class="cell"><div align="center">
        
        <input name="checkbox[]" type="checkbox" id="checkbox[]" value="<? echo $row['id']; ?>">

      </div></td>

      <td class="cell"><?php echo $row['ip'];?></td>

      <td class="cell"><?php echo stripslashes($row['notes']);?></td>
	  
      </tr>

	<?	} ?>

    <tr>
      <td colspan="3" class="cell">

        <div align="left">
        
  <input name="delete" class="button" type="submit" id="delete" value="Delete">

          </div></td>

    </tr>

  </table>
  </form>

</div>



  <tr><td height="14" colspan="3" >&nbsp;</td>

  </tr>
             
                
                
                
                </p>
				</div>
              
				<!--  / ABOUT BOX \ -->
				
				
			</div>
			<!--  \ RIGHT CONTAINER / -->  
			
        </div>
		</div>
        <!--  \ CONTENT CONTAINER / -->
		
	</div>
	<!--  \ MAIN CONTAINER / -->
	
	<!--  / FOOTER CONTAINER \ -->


	         <?php
include 'footer1.php';
?>



	<!--  \ FOOTER CONTAINER / -->
		
</div>
<!--  \ WRAPPER / -->

</body>

</html>