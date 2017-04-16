<?php 
include('config.php');
// <--Insert and Update Code-->
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gen=$_POST['gen'];
$dob=$_POST['dob'];
$con_no=$_POST['con_no'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$s_q1=$_POST['s_q1'];
$a_q1=$_POST['a_q1'];
$s_q2=$_POST['s_q2'];
$a_q2=$_POST['a_q2'];
$img=$_FILES['pic']['name'];
$allergy=$_POST['allergy'];
$blood=$_POST['blood'];
$bloodpn=$_POST['bloodpn'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$others=$_POST['others'];
$path="upload/".time().$img;
move_uploaded_file($_FILES['pic']['tmp_name'],$path );



$check=$db->get_var("select count(*) from user_rgis where email='$email'");
					if($check>0)
					{
					echo "<script>alert('This Email-Id Already Exist!!! Try New Id...')</script>";
					}
					else
					{
					
					$query="insert into user_rgis values('$fname','$lname','$gen','$dob','$con_no','$address','$city','$state','$country','$email','$pass','$s_q1','$a_q1','$s_q2','$a_q2','$path','$allergy','$blood.$bloodpn','$height','$weight','$others')";
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
	<title>Register - EHA</title>

	<link rel="stylesheet" href="css/StyleSignUp.css" type="text/css"/>
<script lang="javascript">
/*
function abc()
{
if(document.getElementById("pass").value==document.getElementById("con").value)
return true;
else
alert('confirm password do not match password');

pattern = /^[a-zA-Z]+$/;
					b = document.getElementById("fname").value;
					if(b.match(pattern))
					{
					return true;
					}
					
					else
					{
						alert("Please!! insert Alphbat only");
 					}
					
					
pattern = /^[a-zA-Z]+$/;
					b = document.getElementById("lname").value;
					if(b.match(pattern))
					{
					return true;
					}
					
					else
					{
						alert( "Please!! insert Alphbat only");
 					}
					
}
*/
</script>
    <style type="text/css">
        .style1
        {
            width: 101%;
        }
        .style5
        {
            height: 48px;
        }
        .style6
        {
            width: 234px;
        }
        .style11
        {
            width: 123px;
        }
        .style12
        {
            height: 18px;
        }
        </style>
</head>
<body>
	<form name="form1"enctype="multipart/form-data" method="post" >
 <div id="header">
		<a href="GeneralHome.aspx" class="logo"><img src="images/logo.png" alt=""></a>
<ul>
			<li class="selected">
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
		</ul>	
	</div>
	<div id="body">
		<div class="content">
			&nbsp;<h2>Create your New Account here</h2>
			<div class="section">
				<div>
					
				    <table class="style1" 
                        style="font-family: 'Lucida Sans Unicode'; height: 847px;">
                                        <tr>
                                            <td colspan="6">
                                                <span>Personal Information</span></td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                &nbsp;</td>
                                            <td colspan="3">
                                                &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                First Name :
                                                <input type="text" name="fname" Placeholder="First Name..." required />
             
                                            </td>
                                            <td colspan="3">
                                                Last Name :
                                                <input type="text" name="lname" Placeholder="Last Name..." required />
             
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                Gender :</td>
                                            <td colspan="3">
                                          Male &nbsp; <input type="radio" value="Male" name="gen" checked="true"/>
										   Female &nbsp;<input type="radio" value="Female" name="gen"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                Date of Birth :</td>
                                            <td colspan="3">
                                                <input type="date"  name="dob" Placeholder="Date Of Birth..." required />
             
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                Contact Number :</td>
                                            <td style="margin-left: 40px" colspan="3">
                                                <input type="number" name="con_no" Placeholder="Contact Number..." required maxlength="10"/>
             
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                Address :</td>
                                            <td colspan="3">
                                              <textarea name="address" ></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                City :</td>
                                            <td colspan="3">
										<input type="text" name="city" Placeholder="city..." required />
                                    
					   </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                State :</td>
                                            <td colspan="3">
                                    <input type="text" name="state" Placeholder="state..." required />
                      </td>
                                        </tr>
                                        <tr>
                                            <td class="style11" colspan="3">
                                                Country :</td>
                                            <td colspan="3">
                                    <input type="text" name="country" Placeholder="contry..." required />
                      </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td class="style11" colspan="3">
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
                                                &nbsp;<input type="email" name="email" Placeholder="Email Address..." required />
                                            </td>
                                            <td>
                                                <input type="image" Height="28px" 
                                                    src="images/checkmark01.gif" Width="51px" />
                                                <input type="image" ID="Image2" runat="server" Height="28px" 
                                                    src="images/Error-icon.png" Width="36px"/>
                                            </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Enter Password :</td>
                                            <td colspan="2">
                         <input type="password" name="pass" Placeholder="password..." required />
                                 </td>
                                            <td colspan="2">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2">
                                                Confirm Password :</td>
                                            <td colspan="2">
           <input type="password" name="cpass" Placeholder="confirm password..." required />
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
                                     <input type="text" name="a_q1" Placeholder="answer..."/>
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
                                     <input type="text" name="a_q2" Placeholder="answer2..." required />
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
                                                 <td colspan="6" class="style5">
                                                <span>Health information</span>&nbsp;</td>
                                            <td class="style5">
                                                 </td>
                                            <td class="style5">
                                                 </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                Allergies :</td>
                                            <td colspan="2" class="style12">
                            <input type="text" name="allergy" required >
                             </td>
                                            <td colspan="2" class="style12">
                                                </td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                Blood Group :</td>
                                            <td colspan="2" class="style12">
<select name="blood" >
<option value="A">A</option>
<option value="B">B</option>
<option value="AB">AB</option>
<option value="O">O</option>
</select>
<select name="bloodpn">
<option value="+">+</option>
<option value="-">-</option>
</select>                                      
									  </td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                Height :</td>
                                            <td colspan="2" class="style12">
<select name="height" >
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
</select>                                      
                                                (in inch)</td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                Weight :</td>
                                            <td colspan="2" class="style12">
<input type="text" name="weight" required >                                   
								   </td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                Other Details :</td>
                                            <td colspan="2" class="style12">
<input type="text" name="others">
                                            </td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                Upload your pic</td>
                                            <td colspan="2" class="style12">
                                               <input type="file" name="pic">
                                            </td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                            <td colspan="2" class="style12">
                                                &nbsp;</td>
                                        </tr>
                                      
                                        
                                        <tr>
                                            <td colspan="6" style="text-align: center">
                                                <input type="submit" Height="36px" name="submit" ImageUrl="images/Create-New-Account_Button1.png" Width="173px"/>
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
