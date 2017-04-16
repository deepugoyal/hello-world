

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
        .style5
        {
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
					<h2 style="text-align: center; height: 41px;">Hello Admin : Here you get the detail 
                        information about the Patient</h2>
                    </div>
			</li>
			<?php 
			include('config.php');
			if(isset($_GET['a']))
			{
				$email=$_GET['a'];
									$query=$db->get_row("select * from user_rgis where email='$email'");
								
									$img=$query->pic;
									
								?>
			<li>
                        <table class="style1">
                            <tr>
                                <td class="style5" colspan="2" rowspan="3">
                                    <table class="style1">
                            <tr>
                                <td class="style5">
                                    First Name :</td>
                                <td class="style3">
                                   <?php echo $query->fname; ?>
                                </td>
                                <td class="style2" rowspan="4">
                                    <img src="<?php echo $img; ?>" Height="151px" Width="146px" />
                                </td>
                            </tr>
							 <tr>
                                <td class="style5">
                                    Last Name :</td>
                                <td class="style3">
                                   <?php echo $query->lname; ?>
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
                                    Contact Number :</td>
                                <td colspan="2">
                                   <?php echo $query->c_no; ?>
                                </td>
                            </tr>
                          
                            <tr>
                                <td class="style5">
                                    Address:</td>
                                <td colspan="2">
                                    <?php echo $query->address; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Allergies :</td>
                                <td colspan="2">
                                    <?php echo $query->allergies; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Blood Group :</td>
                                <td colspan="2">
                                   <?php echo $query->blood; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Height :</td>
                                <td colspan="2">
                                   <?php echo $query->height; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Weight :</td>
                                <td colspan="2">
                                    <?php echo $query->weight; ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Other Details :</td>
                                <td colspan="2">
                                   <?php echo $query->other_details; ?>
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
                             
                            </tr>
                        </table>
										
										
										
										
										
										
                                          
                               
                    			</li>
								<?php
			}
			?>
		</ul>
	</div>
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


