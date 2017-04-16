<?php 
include('config.php');
// <--Insert and Update Code-->
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$con_no=$_POST['con_no'];
$mob_no=$_POST['mob_no'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];

$img=$_FILES['img']['name'];
$path="upload/".time().$img;
move_uploaded_file($_FILES['img']['tmp_name'],$path );

$email=$_POST['email'];
$pass=$_POST['pass'];
$clinic_name=$_POST['clinic_name'];
$clinic_addr=$_POST['clinic_addr'];
$clinic_con_no=$_POST['clinic_con_no'];
$category=$_POST['category'];
$specialize=$_POST['specialize'];
$abt_profile=$_POST['abt_profile'];
$past_exp=$_POST['past_exp'];
$past_desig=$_POST['past_desig'];
$degree=$_POST['degree'];
$avail_from=$_POST['avail_from'];
$avail_from_ap=$_POST['avail_from_ap'];
$avail_to=$_POST['avail_to'];
$avail_to_ap=$_POST['avail_to_ap'];
$s_q1=$_POST['s_q1'];
$a_q1=$_POST['a_q1'];
$s_q2=$_POST['s_q2'];
$a_q2=$_POST['a_q2'];




$check=$db->get_var("select count(*) from advisor_regis where email='$email'");
					if($check>0)
					{
					echo "<script>alert('This Email-Id Already Exist!!! Try New Id...')</script>";
					}
					else
					{
					
					$query="insert into advisor_regis values('$name','$gen','$dob','$con_no','$mob_no','$address','$city','$state','$country','$path','$email','$pass','$clinic_name','$clinic_addr','$clinic_con_no','$category','$specialize','$abt_profile','$past_exp','$past_desig','$degree','$avail_from.$avail_from_ap','$avail_to.$avail_to_ap','$s_q1','$a_q1','$s_q2','$a_q2','pending')";
						$result=$db->query($query);
							if($result)
								echo "<script>alert('Inserted')</script>";
							else
								echo "<script>alert('Sorry')</script>";
					}
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="UTF-8">
	<title>Location - Laboratory Website Template</title>
 
	<link rel="stylesheet" href="css/StyleAdvisorSignUp.css" type="text/css"/>
    <style type="text/css">
        .style1
        {
            width: 100%;
        }
        .style5
        {
            height: 48px;
        }
        .style6
        {
            width: 234px;
        }
        .style7
        {
            height: 25px;
        }
        </style>
</head>
<body>
	<form id="form1" enctype="multipart/form-data" method="post">
	  <div id="header">
		<a href="GeneralHome.aspx" class="logo"><img src="images/logo.png" alt=""></a>
<ul>
			<li>
				<a href="GeneralHome.html">Home</a>
			</li>
		<li>
				<a href="AboutUs.html">About Us</a>
			</li>
			<li>
				<a href="services.html">Services</a>
			</li>
			<li>
				<a href="location.html">Our Locations</a>
			</li>
			<li>
				<a href="blog.html">Blog</a>
			</li>
			<li>
				<a href="generallogin.html">Login</a>
			</li>
		</ul>	</div>
	<div id="body">
		<div class="content">
			&nbsp;<h2>Create New Account for Advisor here</h2>
			<div class="section">
				<div>
					
				    <table class="style1" 
                        style="font-family: 'Lucida Sans Unicode'; height: 1307px;">
                                        <tr>
                                            <td colspan="6">
                                                <span>advisor Personal Information</span></td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                &nbsp;</td>
                                            <td colspan="3">
                                                &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Enter Name</td>
                                            <td colspan="3">
                                            <input type="text" name="name" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Gender :</td>
                                            <td colspan="3">
                                               <input type="radio" name="gen" value="Male"/>Male
													   <input type="radio" name="gen" value="Female"/>Female
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Date of Birth :</td>
                                            <td colspan="3">
                                                <input type="date" name="dob" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Contact Number :</td>
                                            <td style="margin-left: 40px" colspan="3">
                                                <input type="text" name="con_no" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Mobile Number :</td>
                                            <td colspan="3">
                                               <input type="text" name="mob_no" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Address :</td>
                                            <td colspan="3">
                                               <textarea name="address"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                City :</td>
                                            <td colspan="3">
                                                <input type="text" name="city" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                State :</td>
                                            <td colspan="3">
                                                <input type="text" name="state" required />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style6" colspan="3">
                                                Country :</td>
                                            <td colspan="3">
                                                <input type="text" name="country" required />
                                            </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td class="style6" colspan="3">
                                                &nbsp;</td>
                                            <td colspan="3">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="6" class="style5">
                                            <span>account information</span>&nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td class="style6">
                                                Enter new E-mail id :</td>
                                            <td colspan="4">
                                                 <input type="email" name="email" required />
                                            </td>
                                            <td>
                                               
                                            </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Enter Password :</td>
                                            <td colspan="2">
                                                 <input type="password" name="pass" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Confirm Password :</td>
                                            <td colspan="2">
                                                 <input type="password" name="cpass" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                       <tr>
                                            <td colspan="6">
                                                <span>security information</span>&nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Select your Security Question 1 :</td>
                                            <td colspan="2">
                                                <select name="s_q1">                                        
										<option value="What is your Favorite Color?">What is your Favorite Color?</option>
												<option value="What was your Childhood Nick Name?">What was your Childhood Nick Name?</option>
												<option value="What is your Favorite Movie?">What is your Favorite Movie?</option>
												</select>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Answer 1 :</td>
                                            <td colspan="2">
                                               <input type="text" name="a_q1" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Select your Security Question 2 :</td>
                                            <td colspan="2">
                                               <select name="s_q2">                                        
										<option value="What is your Favorite Color?">What is your Favorite Color?</option>
												<option value="What was your Childhood Nick Name?">What was your Childhood Nick Name?</option>
												<option value="What is your Favorite Movie?">What is your Favorite Movie?</option>
												</select>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Answer 2 :</td>
                                            <td colspan="2">
                                                 <input type="text" name="a_q2" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                        
                                        
                                        <tr>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="6">
                                                <span>Work profile</span>&nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Clinic Name :</td>
                                            <td colspan="2">
                                                <input type="text" name="clinic_name" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Clinic Address :</td>
                                            <td colspan="2">
                                                 <input type="text" name="clinic_addr" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Clinic Contact Number :</td>
                                            <td colspan="2">
                                                <input type="text" name="clinic_con_no" required />
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style7">
                                                Category:</td>
                                            <td colspan="2" class="style7">
                                               <select name="category">
											   <option value="Allergist">Allergist</option>
												<option value="Andrologists">Andrologists</option>
												<option value="Audiologists">Audiologists</option>
												<option value="Cardiologist">Cardiologist</option>
												<option value="Dentist">Dentist</option>
												<option value="General">General</option>
												<option value="Gynecologists">Gynecologists</option>
											   </select>
                                            </td>
                                            <td colspan="2" class="style7">
                                                </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Specialization</td>
                                            <td colspan="2">
                                               <textarea name="specialize" ></textarea>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                About Current Working Profile :</td>
                                            <td colspan="2">
                                               <textarea name="abt_profile" ></textarea>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Past Experience :</td>
                                            <td colspan="2">
                                               <textarea name="past_exp" ></textarea>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Past Designation :</td>
                                            <td colspan="2">
                                                <textarea name="past_desig" ></textarea>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Degree :</td>
                                            <td colspan="2">
                                               <textarea name="degree" ></textarea>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Availability Time</td>
                                            <td colspan="2">
                                                From
                                              <select name="avail_from">
                                                    <option value="1:00">1:00</option>
                                                    <option value="2:00">2:00</option>
                                                    <option value="3:00">3:00</option>
                                                     <option value="4:00">4:00</option>
                                                    <option value="5:00">5:00</option>
                                                    <option value="6:00">6:00</option>
                                                    <option value="7:00">7:00</option>
                                                     <option value="8:00">8:00</option>
                                                     <option value="9:00">9:00</option>
                                                     <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                     <option value="12:00">12:00</option>
                                                </select>
                                                <select name="avail_from_ap">
                                                    <option value="AM">AM</option>
                                                     <option value="PM">PM</option>
                                                </select>
&nbsp;&nbsp;&nbsp;&nbsp; To
                                               <select name="avail_to">
                                                 <option value="1:00">1:00</option>
                                                    <option value="2:00">2:00</option>
                                                    <option value="3:00">3:00</option>
                                                     <option value="4:00">4:00</option>
                                                    <option value="5:00">5:00</option>
                                                    <option value="6:00">6:00</option>
                                                    <option value="7:00">7:00</option>
                                                     <option value="8:00">8:00</option>
                                                     <option value="9:00">9:00</option>
                                                     <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                     <option value="12:00">12:00</option>
                                                </select>
                                                <select name="avail_to_ap">
                                                <option value="AM">AM</option>
                                                     <option value="PM">PM</option>
                                                </select>
                                            </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Upload your Photo :</td>
                                            <td colspan="2">
                                              <input type="file" name="img"/>
                                            </td>
                                            <td colspan="2">
                                                <asp:Literal ID="Literal2" runat="server"></asp:Literal>
                                            </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="6" style="text-align: center">
                                               <input type="submit" Height="36px" 
                                                    src="images/Create-New-Account_Button1.png" Width="173px" 
                                                    name="submit" />
                                            </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                    </table>
                                   
					
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				<span>2014 © E-Healthcare Advisor.</span>Designed By :&nbsp;
			</p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
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