

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
    </style>
</head>
<body>
<form id="form1" runat="server">
	<div id="header">
		<a class="logo"><img src="images/logo.png" alt=""></a>
		<ul>
		<li>
				<a href="Admin-UsersDetail.php">Users Detail</a>
			</li>
				<li class="selected">
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
					<span><h2 style="text-align: center">Hello Admin : Here you see all the pending 
                        requests from the Advisors</h2></span>&nbsp;</div>
			</li>
			

			<li>
				
                        <table class="style1">
                            <tr>
                                <td colspan="2" style="text-align: center">
                                    List of Account Activation Request from Advisor</td>
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
								   <th>Show Detail</th>
								   </tr>
								   <?php
								   include('config.php');
								   $result=$db->get_results("select * from advisor_regis where v_status='pending'");
									
								
									if($result)
									{
									foreach ( $result as $res )
									{	
										$id=$res->email;	
		
                           
                          echo"
                                <tr>
								
                                    <td>$res->a_name</td>
                                    <td>$res->gender</td>
                                    <td>$res->email</a></td>
                                    <td><a href='Admin-AdvisorDetail.php?a=$id'>Show Detail</a></td>
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
