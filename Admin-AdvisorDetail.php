

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
     <title>Services - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/styleDetail.css" type="text/css"/>
    <style type="text/css">
        .style1
        {
            width: 100%;
        }
        .style2
        {}
        .style3
        {
            width: 289px;
        }
        .style5
        {
            width: 171px;
        }
        </style>
</head>
<body>
<form id="form1" runat="server">
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
		
	</div>
	<div id="body">
		<ul>
			<li>
				<div class="figure">
					<h2 style="text-align: center; height: 25px;">Hello Admin : Here you get the detail 
                        information about the Advisor</h2>
                    </div>
			</li>
			<?php 
			include('config.php');
			if(isset($_GET['a']))
			{
				$email=$_GET['a'];
									$query=$db->get_row("select * from advisor_regis where email='$email' ");
								
									$img=$query->pic;
									
								?>
			<li>
                        <table class="style1">
                            <tr>
                                <td class="style5">
                                    Name :</td>
                                <td class="style3">
                                   <?php echo $query->a_name; ?>
                                </td>
                                <td class="style2" rowspan="4">
                                    <img src="<?php echo $img; ?>" Height="151px" Width="146px" />
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Gender :</td>
                                <td class="style3">
                                   <?php echo $query->gender; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Date of Birth :</td>
                                <td class="style3">
                                  <?php echo $query->dob; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Country &quot;</td>
                                <td class="style3">
                                   <?php echo $query->country; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    State :</td>
                                <td colspan="2">
                                  <?php echo $query->state; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    City :</td>
                                <td colspan="2">
                                   <?php echo $query->city; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Email-Id :</td>
                                <td colspan="2">
                                   <?php echo $query->email; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Clinic Name :</td>
                                <td colspan="2">
                                   <?php echo $query->clinic_name; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Clinic Address:</td>
                                <td colspan="2">
                                    <?php echo $query->clinic_addr; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Clinic Contact Number :</td>
                                <td colspan="2">
                                    <?php echo $query->clinic_con_no; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Category :</td>
                                <td colspan="2">
                                   <?php echo $query->category; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Specialization:</td>
                                <td colspan="2">
                                   <?php echo $query->specialize; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    About Current Profile :</td>
                                <td colspan="2">
                                    <?php echo $query->abt_current_pro; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Past Experience :</td>
                                <td colspan="2">
                                   <?php echo $query->past_exp; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Degree :</td>
                                <td colspan="2">
                                  <?php echo $query->degree; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Available Time To :</td>
                                <td colspan="2">
                                   <?php echo $query->avail_time_to; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Available Time From :</td>
                                <td colspan="2">
                                   <?php echo $query->avail_time_from; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    &nbsp;</td>
                                <td colspan="2">
                                    &nbsp;</td>
                            </tr>
                           <tr>
                                <td class="style5">
                                     <a href='javascript:history.go(-1)'>Go Back to Previous Page</a></td>
                                <td colspan="2">
								<form action="post">
								<input type="hidden" name="email" value="<?php echo $query->email; ?>"/>
								<input type="submit" name="submit" value="Accept Request"/>
								&nbsp;
								<input type="submit" name="submit" value="Reject Request"/>
                                 </form>   
                                </td>
                            </tr>
                        </table>
                  
                    			</li>
								<?php
			}?>
		</ul>
	</div>
	<?php
	
	if(isset($_GET['submit']))
	{
		$v=$_GET['submit'];
		$email=$_GET['email'];
		if($v=="Accept Request")
		{
			$query="update advisor_regis set v_status='active' where email='$email'";
						$result=$db->query($query);
							if($result)
								echo "<script>alert('Request Successfully Accepted')</script>";
							else
								echo "<script>alert('Sorry')</script>";
			
			
		}
		else if($v=="Reject Request")
		{
			$query="delete from advisor_regis where email='$email'";
						$result=$db->query($query);
							if($result)
								echo "<script>alert('Request Successfully Accepted for Rejection')</script>";
							else
								echo "<script>alert('Sorry')</script>";
			
			
		}
		
	}
	
	?>
	<div id="footer">
		<div>
			<p>
				<span>2023 &copy; E-Healthcare Advisor</span><a href="#" >Terms of Service</a> | <a href="#" >Privacy Policy</a>
			</p>
			<ul>
				<li id="facebook">
					<a href="http://freewebsitetemplates.com/go/facebook/">facebook</a>
				</li>
				<li id="twitter">
					<a href="http://freewebsitetemplates.com/go/twitter/">twitter</a>
				</li>
				<li id="googleplus">
					<a href="http://freewebsitetemplates.com/go/googleplus/">googleplus</a>
				</li>
				<li id="rss">
					<a href="#" >rss</a>
				</li>
			</ul>
		</div>
	</div>
    </form>
</body>
</html>


