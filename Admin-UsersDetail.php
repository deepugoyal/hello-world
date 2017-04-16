
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Services - Laboratory Website Template</title>
	<link rel="stylesheet" href="css/styleAdminAll.css" type="text/css"/>
    <style type="text/css">
        .style1
        {
            width: 100%;
        }
    </style>
</head>
<body>
<form id="form1" method="post">
	<div id="header">
		<a class="logo"><img src="images/logo.png" alt=""></a>
		
			<ul>
		<li  class="selected">
				<a href="Admin-UsersDetail.php">Users Detail</a>
			</li>
				<li>
				<a href="Admin-PendingRequest.php">Pending Request</a>
			</li>
	
			<li>
				<a href="Admin_blogrequest.php">Blog request </a></li>
			<li>
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
					<span><h2 style="text-align: center">Hello Admin :
                        Here you get all the&nbsp; information about the users of this website</h2></span>&nbsp;</div>
			</li>
			<li>
                <table class="style1">
                    <tr>
                        <td style="text-align: center">
                          Select User
                           
                        </td>
                        <td style="text-align: center">
                           <select name="user">
							
							<option value="Patient">Patient</option>
							<option value="Advisor">Advisor</option>
						   </select> 
                            </td>
                    </tr>
					
                    <tr>
					<td>&nbsp;</td>
                        <td style="text-align: center">
                            <input type="submit" name="submit" value="Show"/></td>
                  
                    </tr>
                </table>
            </li>
			
			
			<?php
			include('config.php');
// <--Insert and Update Code-->
	if(isset($_POST['submit']))
	{
		$u_type=$_POST['user'];
	if($u_type=="Advisor")
	{
	
			
			
			
			
			?>
			
			
			<li>
				
                        <table class="style1">
                            <tr>
                                <td colspan="2" style="text-align: center">
                                    Advisors List of EHA</td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;</td>
                                <td>
                                    &nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center">
                                   <table cellspacing="0" cellpadding="3" rules="all" align="center" style="background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;height:204px;width:100%;border-collapse:collapse;">
								   <tr>
								   <th>Advisor Name</th>
								   <th>Gender</th>
								   <th>Email-Id</th>
								   <th>Category</th>
								   </tr>
								   <?php
								   $result=$db->get_results("select * from advisor_regis ");
									
								
									if($result)
									{
									foreach ( $result as $res )
									{	
										$id=$res->email;	
		
                           
                          echo"
                                <tr>
								
                                    <td>$res->a_name</td>
                                    <td>$res->gender</td>
                                    <td><a href='AdminUser-AdvisorDetail.php?a=$id'>$res->email</a></td>
                                    <td>$res->category</td>
                                 </tr>";
								 }
									}
									else
									{
										echo "<td colspan='4'>Sorry!!No Record Found";
										
									}
								 ?>
								 </table>
								   
                                     
                                           
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
                                    &nbsp;</td>
                            </tr>
                        </table>
						
						<?php
						}
						else if($u_type=="Patient")
				{
						?>
               
                 
                        <table class="style1">
                            <tr>
                                <td colspan="2" style="text-align: center">
                                    Patients List of EHA</td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp;</td>
                                <td>
                                    &nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center">
                                   <table cellspacing="0" cellpadding="3" rules="all" align="center" style="background-color:White;border-color:#CCCCCC;border-width:1px;border-style:None;height:204px;width:100%;border-collapse:collapse;">
								   <tr>
								   <th>First Name</th>
								   <th>Last Name</th>
								   <th>Gender</th>
								   <th>Email-Id</th>
                                      
                                       </tr>
									   
									   
									   <?php
									   
									    $result1=$db->get_results("select * from user_rgis");
									foreach ( $result1 as $res1 )
									{	
										$id=$res1->email;	
		
                           
                          echo"
                                <tr>
								
                                    <td>$res1->fname</td>
                                    <td>$res1->lname</td>
									<td>$res1->gender</td>
                                    <td><a href='adminuser_patientdetail.php?a=$id'>$res1->email</a></td>
                                    
                                 </tr>";
								 }
								 ?>
								 </table>
                                </td>
                            </tr>
                        </table>
						<?php
						}
						}
						?>

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
    </form>
</body>
</html>
