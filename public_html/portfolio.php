<?php
require 'ses.php';
require 'classes.php';

//$_SESSION['fromport'] = "notadmin";
if($_SESSION['fromlogin'] == "admin"){
   //send them back
   header("Location: adminportfolio.php");
}
$sp=$_SESSION['login_user'];
?>

<!DOCTYPE html>
<!--[if lte IE 8]> <html class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo $user_data['name']; ?></title>
<!-- add fancybox.css -->
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/all.css" />
	<link rel="stylesheet" href="css/screen.css" />
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper" class="portfolio">
		<div class="wrapper-holder">
			<header id="header">
				<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<!--li><a href="myskills.html">My skills</a></li-->
							<li><a class="active" href="portfolio.php">Options</a></li>
							<li><a href="logout.php">Log Out</a></li>
						</ul>
					</nav>
			</header>
		</div>
		<div class="wrapper-holder grey">
			<section id="main">
				<h2>Select from the available options</h2>
				<ul id="filters" class="sub_nav">
					<li class="active" data-filter="*">All options</li>
					<li data-filter=".web">Menu</li>
					<li data-filter=".illustration">Payment</li>
					<li data-filter=".dtp">Inform Options</li>
					<li data-filter=".key">Polling Options</li>
					<!--li data-filter=".identity">Inventory</li-->
				</ul>
				<ul id="container" class="item-list">
					<li class="item web" >
						<div class="image">
							<img src="images/Display_Menu.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_1">
									<div class="item-content">
										<h4>Display Menu</h4>
										<p>Click here to display menu.</p>
									</div>
								</a>
							</div>
						</div>
					</li>

					<!--li class="item web">
						<div class="image">
							<img src="images/menu.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_2">
									<div class="item-content">
										<h4>Change Menu</h4>
										<p>Click here to change menu.</p>
									</div>
									</a>
							</div>
						</div>
					</li-->
					<li class="item illustration">
						<div class="image">
							<img src="images/Total_Pay.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_3">
									<div class="item-content">
										<h4>Total Fee</h4>
										<p>Click here to check total fee.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item illustration">
						<div class="image">
							<img src="images/Refund.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_4">
									<div class="item-content">
										<h4>Request Refund</h4>
										<p>Click here to check refund if any.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item illustration">
						<div class="image">
							<img src="images/Dues.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_5">
									<div class="item-content">
										<h4>Check Dues</h4>
										<p>Click here to check dues if any.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item illustration">
						<div class="image">
							<img src="images/Impose Fine.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_6">
									<div class="item-content">
										<h4>Check Fine</h4>
										<p>Click here to check fine if any.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item dtp">
						<div class="image">
							<img src="images/Leave.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_7">
									<div class="item-content">
										<h4>Apply Leave or Resume</h4>
										<p>Click here to check leave request.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<!--li class="item dtp">
						<div class="image">
							<img src="images/students.jpg"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_8">
									<div class="item-content">
										<h4>Total Number</h4>
										<p>Click here to check how many students do there breakfast/lunch/dinner per day.</p>
									</div>
								</a>
							</div>
						</div>
					</li-->
					<li class="item dtp">
						<div class="image">
							<img src="images/Utensil_report.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_9">
									<div class="item-content">
										<h4>Report Utensil</h4>
										<p>click here to check if there any utensil report.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item dtp">
						<div class="image">
							<img src="images/Feedback.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_10">
									<div class="item-content">
										<h4>Provide Feedback</h4>
										<p>Click here to check feedback.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					
					<li class="item key">
						<div class="image">
							<img src="images/Start_poll.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_12">
									<div class="item-content">
										<h4> Poll votes</h4>
										<p>Click here to stop poll.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<!--li class="item key">
						<div class="image">
							<img src="images/result.jpg"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_13">
									<div class="item-content">
										<h4>Poll Results</h4>
										<p>Click here to declare poll result.</p>
									</div>
								</a>
							</div>
						</div>
					</li-->
					<!--li class="item identity">
						<div class="image">
							<img src="images/show.jpeg"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_14">
									<div class="item-content">
										<h4>Show Items</h4>
										<p>Click here to show items present in inventory.</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item identity">
						<div class="image">
							<img src="images/add.png"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_15">
									<div class="item-content">
										<h4>Add Items</h4>
										<p>Click here to add item in inventory</p>
									</div>
								</a>
							</div>
						</div>
					</li>
					<li class="item identity">
						<div class="image">
							<img src="images/delete.jpg"  alt="" width="200" height="200" />
							<div class="hover">
								<a class="fancybox" rel="gallery1" href="#portfolio_16">
									<div class="item-content">
										<h4>Delete Items</h4>
										<p>Click here to remove items from inventory.</p>
									</div>
								</a>
							</div>
						</div>
					</li-->
				</ul>
			</section>
		</div>
		<footer id="footer">
			<div class="footer-content">
				<ul class="social">
					<li class="email"><a href="#">Email</a></li>
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="google"><a href="#">Google+</a></li>
					<li class="twitter"><a href="#">Twitter</a></li>
					
				</ul>
				<!--p class="copy">Copyright 2016 IIT Jodhpur. All rights reserved.</p-->
			</div>
		</footer>	
	</div>
	<div style="display:none;">
		<div id="portfolio_1" class="popup_portfolio">
			<img src="uploads/mess1.jpg"  alt="" />
			<h3>Menu</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>menu of the week</p>
		</div>
		<div id="portfolio_2" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Upload</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>upload your image</p>
                        
                        <form action="script.php" class="form-inline" role="form" method="post" enctype="multipart/form-data">
                           <table>
                           <tr><td><input type="file" name="image"></td></tr>
                           <tr><td><input name="Submit" class="btn btn-primary" type="submit" value="upload"></td></tr>
                           </table>	
                        </form>
  
		</div>
		<div id="portfolio_3" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Total Fees</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Your total fees towards mess are : 
<?php
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
   $ses1="SELECT * FROM mess_pay WHERE Roll_Number='$user_check'";
   $result1=mysql_query($ses1);

   $row1 = mysql_fetch_assoc($result1);
   $total =$row1['Total_Amount'];
   $user_data1 = $row1;
   echo $total;
?>
</p>
		</div>
		<div id="portfolio_4" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Request Refund</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Press submit to request for refund of amount <?php echo -1*$total;?>
<div class="login-bottom">
 <form action="script.php" class="form-inline" role="form" method="post" enctype="multipart/form-data">
                           <input name="Submit" type="submit" value="refund">
                          	
                        </form></div>
</p>
		</div>
		<div id="portfolio_5" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Title of the work 5</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Your Dues till date are :</p>
                        <p> <?php echo $user_data1['Mess_Dues'];?> </p>
		</div>
		<div id="portfolio_6" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Title of the work 6</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Your Fine till date are :</p>
                        <p> <?php echo $user_data1['Fine_Imposed'];?> </p>
		</div>
		<div id="portfolio_7" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Apply for Leave / Resume Services</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p><div class="login-bottom">
                          <form method="POST">
<select name="services">
  <option value="">Select...</option>
  <option value="1">Apply for Leave</option>
  <option value="0">Resume Services</option>
  
</select><br>
    <input type="submit" value=" Submit "></form></div>
<?php
if(isset($_POST["services"]))
{
   $choices=$_POST['services'];
    $q5="UPDATE mess_users SET leav='$choices' WHERE username='$sp' ;";
    mysql_query($q5) or die("Query failed.");
}
?>
                           
                        </p>
		</div>
		<div id="portfolio_8" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Total Number</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p><?php
                              $qp1="SELECT COUNT(*) FROM mess_users WHERE leav = 0;";
                              $tot1=mysql_query($qp1);$k=1;
                               while ($rowt1 = mysql_fetch_array($tot1))
                              {
                                  
                                    foreach($rowt1 as $ft1)
                                    {if($k==1)
                                    {echo $ft1;	$k=0;}}
                              }
                           ?>
                              students will be using services.
                          </p>
		</div>
                <div id="portfolio_9" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Utensil Reports</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p><div class="login-bottom">
                         <form action="" method="POST">
<input type="text" name="reportu" id="reportu" placeholder="report message" required="">					  				
			<input type="submit" value="Report">
					</form></div>
                          
                            
                          <?php 
                            if(isset($_POST["reportu"]))
                            {
                            $rep=$_POST["reportu"];
                            $q15="UPDATE mess_users SET utensil_report='$rep' WHERE username='$sp';";
                            $r15 = mysql_query($q15);
                           
                            } ?>  
                        </p>
		</div>
                <div id="portfolio_10" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Feedbacks</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>
<div class="login-bottom">                      
<form action="" method="POST">
<input type="text" name="feed1" id="feed1" placeholder="feedback message" required="">					  				
			<input type="submit" value="Submit">
					</form></div>
                          
                            
                          <?php 
                            if(isset($_POST["feed1"]))
                            {
                            $rep5=$_POST["feed1"];
                            $q17="UPDATE mess_users SET feedback='$rep5' WHERE username='$sp';";
                            $r17 = mysql_query($q17);
                           
                            } ?>  
                        </p>
		</div>
                <div id="portfolio_11" class="popup_portfolio">
			<img src="images/img_pf02.jpg"  alt="" />
			<h3>Title of the work 8</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
		</div>
                <div id="portfolio_13" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Stats till now</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Breakfast
                         <table>
                          <?php $q6="SELECT Item_Name, Votes FROM Polls_Breakfast ORDER BY Votes DESC;";
                            $r6 = mysql_query($q6);
                            $k=1;
                            echo '<tr><td>'."-----Item_Name----".'</td><td>'."---Votes---".'</td></tr>';
                            while ($row6 = mysql_fetch_array($r6))
                            {
                              echo '<tr>';
                              foreach($row6 as $f6) {
                              //echo '<td>'." ".$k." ".'</td>';
                              if($k%2==0)
                              {
                                  echo '<td>'." ".$f6." ".'</td>';
                                  //echo " ";
                               } 
                              $k=$k+1;
                            }
                             echo '</tr>';
                            } ?> </table>
                        </p>
                        <p>Lunch
                         <table>
                          <?php $q7="SELECT Item_Name, Votes FROM Polls_Lunch ORDER BY Votes DESC;";
                            $r7 = mysql_query($q7);
                            $k=1;
                            echo '<tr><td>'."---Item_Name---".'</td><td>'."----Votes----".'</td></tr>';
                            while ($row7 = mysql_fetch_array($r7))
                            {
                              echo '<tr>';
                              foreach($row7 as $f7) {
                              //echo '<td>'." ".$k." ".'</td>';
                              if($k%2==0)
                              {
                                  echo '<td>'." ".$f7." ".'</td>';
                                  //echo " ";
                               } 
                              $k=$k+1;
                            }
                             echo '</tr>';
                            } ?> </table>
                        </p>
                        <p>Dinner
                         <table>
                          <?php $q8="SELECT Item_Name, Votes FROM Polls_Dinner ORDER BY Votes DESC;";
                            $r8 = mysql_query($q8);
                            $k=1;
                            echo '<tr><td>'."-----Item_Name-----".'</td><td>'."----Votes----".'</td></tr>';
                            while ($row8 = mysql_fetch_array($r8))
                            {
                              echo '<tr>';
                              foreach($row8 as $f8) {
                              //echo '<td>'." ".$k." ".'</td>';
                              if($k%2==0)
                              {
                                  echo '<td>'." ".$f8." ".'</td>';
                                  //echo " ";
                               } 
                              $k=$k+1;
                            }
                             echo '</tr>';
                            } ?> </table>
                        </p>
		</div>

                <div id="portfolio_12" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Poll</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p><div class="login-bottom">
<p><?php echo "Select one from each";?></p>
<br>Breakfast : 
  <form method="POST">
<select name="pollin1">
  <option value="">Select...</option>
  
  <?php $qpr2="SELECT Item_Name FROM Polls_Breakfast";
$rpr2 = mysql_query($qpr2);
$k=1;
while ($rwr3 = mysql_fetch_array($rpr2))
{
    echo '<tr>';
    foreach($rwr3 as $fr1) {
        //echo '<t>'." ".$k." ".'</td>';
        if($k%2==0)
        {
        echo "<option value=".$fr1.">".$fr1."</option>";
        //echo " ";
        } 
        $k=$k+1;
    }
    echo '</tr>';
   
} ?> 
</select>
<br>Lunch : <br>
<select name="pollin2">
  <option value="">Select...</option>
  
  <?php $qpr3="SELECT Item_Name FROM Polls_Lunch";
$rpr3 = mysql_query($qpr3);
$k=1;
while ($rwr4 = mysql_fetch_array($rpr3))
{
    echo '<tr>';
    foreach($rwr4 as $fr2) {
        //echo '<t>'." ".$k." ".'</td>';
        if($k%2==0)
        {
        echo "<option value=".$fr2.">".$fr2."</option>";
        //echo " ";
        } 
        $k=$k+1;
    }
    echo '</tr>';
   
} ?> 
</select>
<br>Dinner : <br>
<select name="pollin3">
  <option value="">Select...</option>
  
  <?php $qpr4="SELECT Item_Name FROM Polls_Dinner";
$rpr4 = mysql_query($qpr4);
$k=1;
while ($rwr5 = mysql_fetch_array($rpr4))
{
    echo '<tr>';
    foreach($rwr5 as $fr3) {
        //echo '<t>'." ".$k." ".'</td>';
        if($k%2==0)
        {
        echo "<option value=".$fr3.">".$fr3."</option>";
        //echo " ";
        } 
        $k=$k+1;
    }
    echo '</tr>';
   
} ?> 
</select><br>

    <input type="submit" value="Vote"></form></div>
<?php
$qpo5="SELECT poll_flag FROM mess_users WHERE username = '$sp';";
$respo1=mysql_query($qpo5) or die("Query failed.");$k=1;
     while ($rowpo1 = mysql_fetch_array($respo1))
                              {
                                  foreach($rowpo1 as $fpo1)
                                    {if($k==1)
                                    {$check= $fpo1;	$k=0;}}
                              }
if($check==0)
{
if(isset($_POST["pollin1"]) && isset($_POST["pollin2"]) && isset($_POST["pollin3"]))
{
   $itemp1=$_POST['pollin1'];
   $itemp2=$_POST['pollin2'];
   $itemp3=$_POST['pollin3'];
    $qpo1="UPDATE Polls_Breakfast SET Votes=Votes+1 WHERE Item_Name = '$itemp1';";
    $qpo2="UPDATE Polls_Lunch SET Votes=Votes+1 WHERE Item_Name = '$itemp2';";
    $qpo3="UPDATE Polls_Dinner SET Votes=Votes+1 WHERE Item_Name = '$itemp3';";
    mysql_query($qpo1) or die("Query failed.");
    mysql_query($qpo2) or die("Query failed.");
    mysql_query($qpo3) or die("Query failed.");

   $qpo4="UPDATE mess_users SET poll_flag = 0 WHERE username = '$sp';";
   mysql_query($qpo4) or die("Query failed.");
     

}
else
{
  
}
}
else
{echo "You have already voted";}
?>
                        </p>
		</div>


                <div id="portfolio_14" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Title of the work 6</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p>Items in inventory are :</p>
                        <table> <?php $query="SELECT * FROM Inventory";
$results = mysql_query($query);
$k=1;
echo '<tr><td>'."--Sr---".'</td><td>'."----Name-----".'</td><td>'."----Quantity-----".'</td><td>'."----Expiry----".'</td>'.'</tr>';
while ($row2 = mysql_fetch_array($results))
{
    echo '<tr>';
    foreach($row2 as $field) {
        //echo '<td>'." ".$k." ".'</td>';
         if($k%2==0)
        {
        echo '<td>'." ".$field." ".'</td>';
        //echo " ";
        } 
        $k=$k+1;
    }
    echo '</tr>';
   
} ?> </table>
		</div>
                <div id="portfolio_15" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Add Item</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p><div class="login-bottom">
                               <form action="" method="POST">
						<input type="text" name="itemname" id="itemname" placeholder="itemname" required=" ">					
						<input type="number" name="quantity" id="quantity" class="quantity" placeholder="quantity" required=" ">						
						
					 <?php
                                echo "Select expiry";
	                        echo date_picker("additem");
	                         ?>
                                <input type="submit" value="additem">
                               </form></div>
                                <?php 
                                  if(isset($_POST["itemname"]) && isset($_POST["quantity"]))
                                  {
                                  $itemn=$_POST['itemname'];
                                  $itemq=$_POST['quantity'];
                                 // $expiry="2016-04-25";
                                  $expiry=$_POST['additemyear'].'-'.$_POST['additemmonth'].'-'.$_POST['additemday'] ;
                                  $query3="INSERT INTO Inventory (Item_Name,Quantity,Expiry) VALUES ('$itemn','$itemq','$expiry');";
                                  $results3 = mysql_query($query3);
                                }?>

                        </p>
		</div>
                <div id="portfolio_16" class="popup_portfolio">
			<!--img src="images/img_pf02.jpg"  alt="" /-->
			<h3>Delete Item</h3>
			<time datetime="2014-06-20">Made: 06/20/14</time>
			<p><div class="login-bottom">
Select item
<form method="POST">
<select name="deleteitem">
  <option value="">Select...</option>
  
  <?php $query2="SELECT Item_Name FROM Inventory";
$results2 = mysql_query($query2);
$k=1;
while ($row3 = mysql_fetch_array($results2))
{
    echo '<tr>';
    foreach($row3 as $field1) {
        //echo '<t>'." ".$k." ".'</td>';
        if($k%2==0)
        {
        echo "<option value=".$field1.">".$field1."</option>";
        //echo " ";
        } 
        $k=$k+1;
    }
    echo '</tr>';
   
} ?> 
</select>
    <input type="submit" value="Delete"></form></div>
<?php
if(isset($_POST["deleteitem"]))
{
   $itemd=$_POST['deleteitem'];
    $q5="DELETE FROM Inventory WHERE Item_Name = '$itemd';";
    mysql_query($q5) or die("Query failed.");
}
?>
</p>
		</div>
	</div>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/cells-by-row.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
                <!--script type="text/javascript" src="js/buttons.js"></script-->
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
