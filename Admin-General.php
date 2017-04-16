<?php
session_start();
include('config.php');
$email=$_SESSION['email'];
// <--Insert and Update Code-->
if(isset($_POST['upload']) && isset($_POST['email']))
{
	include('config.php');
$email=$_POST['email'];

$img=$_FILES['pic']['name'];

if($img)
{
$ext=$_FILES['pic']['type'];
	
$path="admin/".$img;
move_uploaded_file($_FILES['pic']['tmp_name'],$path );

$query="update admin set pic='$path' where email='$email'";
						$result=$db->query($query);
							if($result)
								echo "<script>alert('Uploaded Successfully')</script>";
							else
								echo "<script>alert('Sorry failed to upload.')</script>";

}
else
{
	echo "<script>alert('Please Select the File before upload.')</script>";
	
}
							}
							
							
if(isset($_POST['change']))
{
	
	$email=$_POST['email'];
	$oldpass=$_POST['oldpass'];
	
	$oldpass=$_POST['oldpass'];
	$newpass=$_POST['newpass'];
	
	$query=$db->get_row("select * from admin where email='$email' and pass='$oldpass'");
	
	
	if($query)
	{
	$query="update admin set pass='$newpass' where email='$email'";
						$result=$db->query($query);
							if($result)
								echo "<script>alert('Password Change Successfully')</script>";
							else
								echo "<script>alert('Sorry failed to change the password.')</script>";
	}
	else
	{
	echo "<script>alert('Your Entered $n Old Password is wrong.')</script>";	
		
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
   <title>Services - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/styleAdminAll.css" type="text/css"/>
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
        .style6
        {
            width: 352px;
        }
    </style>
</head>
<body>

	<div id="header">
		<a class="logo"><img src="images/logo.png" alt=""></a>
		<ul>
		<li>
				<a href="Admin-UsersDetail.php">Users Detail</a>
			</li>
				<li>
				<a href="Admin-PendingRequest.php">Pending Request</a>
			</li>
	
			<li>
				<a href="Admin_blogrequest.php">Blog request </a></li>
			<li class="selected">
				<a href="Admin-General.php">General</a>
			</li>
			<li>
               <a href="logout.php">Logout</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<ul>
			<li>
				<div class="figure">
					<span><h2 style="text-align: center">Hello Admin : Here are the general options for 
                        your account</h2>
                    </span></div>
			</li>
			<li>
                <table class="style1">
                    <tr>
                        <td style="text-align: center" class="style6">
                           <input type="button" value="PROFILE" onclick="view1()" />
                           
                        </td>
                        <td style="text-align: center">
                         <input type="button" value="CHANGE PASSWORD" onclick="view2()"/>
						 
                            </td>
                        <td style="text-align: center">
                             &nbsp;</td>
                    </tr>
                    <tr>
                        <td class="style6">
                            &nbsp;</td>
                        <td colspan="2">
                            &nbsp;</td>
                    </tr>
                </table>
				<script lang="javascript">
				
				function view1()
				{
					document.getElementById("view2").style.visibility="hidden";
				//	document.getElementById("view2").style.display="table-column";
					document.getElementById("view1").style.visibility="visible";
					document.getElementById("view1").style.display="block";
				}
				function view2()
				{
					document.getElementById("view1").style.visibility="hidden";
					document.getElementById("view1").style.display="table-column";
					document.getElementById("view2").style.visibility="visible";
					//document.getElementById("view2").style.display="table-column";
				}
				
				function pro()
				{
					
					if(document.getElementById("np").value==document.getElementById("ncp").value)
					{
						return true;
						
					}
					else
					{
						alert('SORRY!!!Confirm Password does not match the password');
						return false;
						
						
					}
					
				}
					
				
				</script>
            </li>
			<li>
			<?php
			

		
			 $query=$db->get_row("select * from admin where email='$email' ");
								
									$img=$query->pic;
			
			?>
				<div id="view1" >
				<form enctype="multipart/form-data" method="post" >
                        <table class="style1">
                            <tr>
                                <td colspan="3" style="text-align: center">
                                    Profile Information</td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    &nbsp;
									<input type="hidden" value="<?php echo $query->email; ?>" name="email" /> 
									</td>
                                <td colspan="2">
                                    &nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    Name :</td>
                                <td class="style3">
                                   <?php echo $query->name; ?>
                                </td>
                                <td class="style2" rowspan="5">
                                   <img src="<?php echo $img;?>" name="image" Height="151px" Width="146px" />
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    E-mail Id :</td>
                                <td class="style3">
                                  <?php echo $query->email; ?>
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
                                    Upload your photo here</td>
                                <td class="style3">
                                   <input type="file" name="pic" />
                                </td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    &nbsp;</td>
                                <td class="style3">
                                    &nbsp;</td>
                            </tr>
                            <tr>
                                <td class="style5">
                                    &nbsp;</td>
                                <td colspan="2">
                                    <input type="submit" value="Upload" name="upload" />
                                </td>
                            </tr>
                        </table>
						</form>
                   </div>
                  <div id="view2" style="visibility:hidden">
				  <form method="post" onsubmit="return pro()">
                        <table class="style1">
                            <tr>
                                <td colspan="2" style="text-align: center">
                                    Change your Password here</td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;</td>
                                <td>
                                    <input type="hidden" value="<?php echo $query->email; ?>" name="email" /> </td>
                            </tr>
                            <tr>
                                <td>
                                    Enter Old Password :</td>
                                <td>
                                    <input type="password" name="oldpass" required />
                                  
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enter New Password :</td>
                                <td>
                                     <input type="password" id="np" name="newpass" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Confirm Password :</td>
                                <td>
                                    <input type="password" id="ncp" name="newcpass" required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;</td>
                                <td>
                                    &nbsp;</td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;</td>
                                <td>
                                    <input type="submit" name="change" value="Submit" />
                                </td>
                            </tr>
                        </table>
						</form>
						
						
              </div>
            
			</li>
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

</body>
</html>
