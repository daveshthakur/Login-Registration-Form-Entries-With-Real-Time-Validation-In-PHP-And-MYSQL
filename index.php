
<?php

include 'library/function.php';
require_once("config.php");
session_start();

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>::: Login and Sign up Form:::</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form " />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/tokenize2.js"></script>
		<link rel="stylesheet" type="text/css" href="css/tokenize2.css" />
		
		
<style type="text/css">
#register form p
{
    position:relative;
}
#register form p.change_link
{ 
    position:absolute;
}
.iconstatus 
{ position: absolute; right: 0; background: transparent; width: 30px; height: 30px; top: 27px;line-height: 29px;
    font-size: 20px;text-align: center;
}
.iconstatus.text-success{ color:#008800; }
.iconstatus.text-danger{ color:#ff0000; }
</style>

    </head>
    
    <body>
        <div class="container">
        
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
    <td width="79%" align="left" style="background-color:#373a3f; height:100px; margin-bottom:40px; padding:0 0 0px 25px;"><a href="https://space-learning.com" target="_blank"><img src="images/STEPL Logo.png" width="220" height="63"></a></td>
    <td width="21%" align="center" valign="middle" style="background-color:#373a3f; height:100px; margin:15px 0 20px 0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><a href="https://www.facebook.com/SPACEIndiaEdu" target="_blank" onmouseover="MM_swapImage('Image6','','images/facebook-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/facebook.png" alt="Facebook" width="34" height="34" id="Image6" /></a></td>
        <td><a href="https://twitter.com/spacian" target="_blank" onmouseover="MM_swapImage('Image7','','images/twitter-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/twitter.png" width="34" height="34" id="Image7" /></a></td>
        <td><a href="https://www.linkedin.com/company/space-technology-&-education-pvt-ltd" target="_blank" onmouseover="MM_swapImage('Image8','','images/linkedin-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/linkedin.png" width="34" height="34" id="Image8" /></a></td>
        <td><a href="https://www.youtube.com/user/SpaceinternetTV" target="_blank" onmouseover="MM_swapImage('Image9','','images/youtube-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/youtube.png" width="34" height="34" id="Image9" /></a></td>
      </tr>
    </table></td>
  </tr>
</table>

            <section>				
                <div id="container_demo" style="padding-top:75px;" >
                  
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                     
                    <div id="wrapper">
                        <div id="login" class="animate form" > 
                        <div align="center" style="color:#069;"><strong>Only for SPACE Astronomy Club Students</strong></div>
                        <br>
                          <form action="loginprocessnew.php" method="POST" autocomplete="on"> 
                            <div align="center" style="color:#F00;"> <?php echo @$_GET['log']; ?></div>
                                <h1>Log in</h1>
                                
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Enter Email ID</label>
                                  <input id="username" name="name" required type="email" placeholder="Email ID"/>
                                </p>
                                
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Enter password</label>
                                  <input id="password" name="pass" required type="password" placeholder="Enter password" /> 
                                </p>
                               
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Login" /> 
								</p>
								
                                <p class="change_link">
									<a href="forgot.php">Forgot Password</a><a href="#toregister" class="to_register">Sign Up</a>
								</p>
								
                            </form>
                        </div>


                        <div id="register" class="animate form">
                            
                            
                            <form id="register_form" action="javascript:void(0);" name="signup" method="POST" autocomplete="on" onsubmit="check_validity()"> 
                                <h1>Sign up</h1> 
                                
								<span style="color:#F00; font-size:12px;"><em>All Fields are Mandatory</em></span>
								<input type="hidden" name="form_verified" id="form_verified" value="0" />
                                <p> 
                                  <label for="usernamesignup" class="uname" data-icon="u">Student Unique ID</label>
								  <span id="suid_status" class="iconstatus"></span>
                                  <input id="student_uid" name="student_uid" required type="text" placeholder="Student Unique ID for eg. XYZ000" style="text-transform:uppercase" />
                                </p>
								
								<p> 
                                  <label for="usernamesignup" class="uname" data-icon="u">School Code</label>
								  <span id="school_code_status" class="iconstatus"><i class="icofont icofont-close"></i></span>
                                  <input id="uid" name="uid" required type="text" placeholder="School CODE for eg. XYZ000" style="text-transform:uppercase" disabled="disabled" />
                                </p>
								
								<p> 
                                  <label for="usernamesignup" class="uname" data-icon="u">School Location</label>
								  <span id="school_location" class="iconstatus"><i class="icofont icofont-close"></i></span>
                                  <input id="location" name="school_location" required type="text" placeholder="School Location for eg. Gurugram" style="text-transform:uppercase" disabled="disabled" />
                                </p>
                                
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">School Name<small></small></label>
									<span id="school_name_status" class="iconstatus"></span>
									<input id="sch_id" name="sname" required type="text" placeholder="School Name for eg. DPS or Delhi Public School" disabled="disabled" />
                                </p>
                                
                              <p> 
                                <label for="usernamesignup" class="uname" data-icon="u">Name of Student</label>
                                <input id="studentname"  name="name" required type="text" placeholder="Name of Student" disabled="disabled" />
                                </p>
                                
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Class</label>
                                  <input id="studentclass" name="class" required type="text" placeholder="Enter Class" disabled="disabled" />
                                </p>  
                                
                                  <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Section</label>
                                  <input id="studentsection" name="section" required type="text" placeholder="Enter Section" disabled="disabled" />
                                </p>
                                
                                <p> 
                                  <label for="emailsignup" class="youmail" data-icon="e">Email ID</label>
                                  <input id="emailsignup" name="email" required type="email" placeholder="Email ID" disabled="disabled" /> 
                                </p>
                                
                                 <p> 
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Create Password</label>
                                  <input id="password_student" name="pass" required type="password" pattern=".{6,}" title="6 or more characters.." placeholder="Password" disabled="disabled" />
                                </p>
                                
                                <p> 
                                <label for="passwordsignup" class="youpasswd" data-icon="p">Confirm Password</label>
                                  <input id="cpassword_student" name="cnfpass" required type="password" pattern=".{6,}" title="6 or more characters.." placeholder="Confirm Password" disabled="disabled" />
                                </p>
                                
                                <p> 
                                    <label for="mobilesignup" class="youpasswd" data-icon="e">Mobile Number</label>
                                  <input id="mobilesignup" name="mobile" required type="tel" placeholder="Mobile Number" pattern="\d{10}" maxlength="10" disabled="disabled" />
                                </p>
                                
								<p class="signin button"> 
									<input type="submit" name="submit" value="Signup" /> 
								</p>
								
                                <p class="change_link">  
									Already a member ?
									<a href="#username" class="to_register">Login</a>
								</p>
								
                            </form>
                        </div> 
						
                    </div>
              </div>  
          </section>
        </div>

<!-- Script For Input Validations -->
<script>

	$(document).ready(function()
	{
		$( "#student_uid").on( "keyup",function() {
			student_uid_check();
		});
 
		$( "#uid" ).on( "keyup",function() {
			check_schoolcode();
		});
		
		$( "#location" ).on( "keyup",function() {
			check_school_location();
		});
		
		$ ( "#sch_id" ).on( "keyup",function() {
			schoolname_check();
		});
 
	});


function student_uid_check()
{	
	var student_uid = $("#student_uid").val();
	if(student_uid != "")
	{
	        $.ajax({
			url: "check_student_uid.php",
			type: "POST",
			data: "student_uid="+student_uid,
			cache: false,
			processData: false,
			success: function (data)
			{
				var msg = data.split('~');
				if(msg[0] == false)
				{
					$("#suid_status").html('<i class="fa fa-check"></i>');
					$("#suid_status").removeClass('text-danger');
					$("#suid_status").addClass('text-success');
					$("#form_verified").val('1');
					
					$("#student_uid").attr('readonly','readonly');
					$("#uid").attr('disabled',false);
					$("#uid").focus();
					return false;			   
				}
				
				else
				{
					$("#suid_status").html('<i class="fa fa-times"></i>');
					$("#suid_status").removeClass('text-success');
					$("#suid_status").addClass('text-danger');
					$("#form_verified").val('0');
					
					$("#uid").val('');
					$("#uid").attr('readonly',false);
					$("#uid").attr('disabled','disabled');
					$("#school_code_status").html('<i class="fa fa-times"></i>');
					$("#school_code_status").removeClass('text-success');
					$("#school_code_status").addClass('text-danger');
					
					$("#location").val('');
					$("#location").attr('readonly',false);
					$("#location").attr('disabled','disabled');
					$("#school_location").html('<i class="fa fa-times"></i>');
					$("#school_location").removeClass('text-success');
					$("#school_location").addClass('text-danger');
					
					$("#sch_id").val('');
					$("#sch_id").attr('readonly',false);
					$("#sch_id").attr('disabled','disabled');
					$("#school_name_status").html('<i class="fa fa-times"></i>');
					$("#school_name_status").removeClass('text-success');
					$("#school_name_status").addClass('text-danger');
					
					$("#student_uid").focus();
					return false;			   
				}
			   
			},
			error: function(e){
				return false;			    
			}
		}); 
	}
	
	else
	
	{
		$("#form_verified").val('0');
		$("#student_uid").focus();
		return false;
	}
}

function check_schoolcode()
{	
	var student_uid = $("#student_uid").val();
	var school_code = $("#uid").val();
	var form_verified = $("#form_verified").val();
	
	if(student_uid && school_code)
	{
		$.ajax({
			url: "check_student_uid_schoolcode.php",
			type: "POST",
			data: "student_uid="+student_uid+"&school_code="+school_code,
			cache: false,
			processData: false,
			success: function (data)
			{
				var msg = data.split('~');
				if(msg[0] == false)
				{
					$("#school_code_status").html('<i class="fa fa-check"></i>');
					$("#school_code_status").removeClass('text-danger');
					$("#school_code_status").addClass('text-success');
					$("#form_verified").val('2');
					
					$("#uid").attr('readonly','readonly');
					$("#location").attr('disabled',false);
					$("#location").focus();					
					return false;			   
				}
				else
				{
					$("#school_code_status").html('<i class="fa fa-times"></i>');
					$("#school_code_status").removeClass('text-success');
					$("#school_code_status").addClass('text-danger');
					$("#form_verified").val('1');
					
					$("#location").val('');
					$("#location").attr('readonly',false);
					$("#location").attr('disabled','disabled');
					$("#school_location").html('<i class="fa fa-times"></i>');
					$("#school_location").removeClass('text-success');
					$("#school_location").addClass('text-danger');
					
					$("#sch_id").val('');
					$("#sch_id").attr('readonly',false);
					$("#sch_id").attr('disabled','disabled');
					$("#school_name_status").html('<i class="fa fa-times"></i>');
					$("#school_name_status").removeClass('text-success');
					$("#school_name_status").addClass('text-danger');
					
					$("#uid").focus();
					return false;			   
				}		   
			},
			error: function(e){
			   alert('Something went wrong!'); 
				return false;			   
			}
		}); 
	}
	else if(student_uid == "" || (form_verified == 0 && student_uid !=""))
	{
		$("#form_verified").val('0');
		$("#student_uid").focus();
		return false;
	}
	else
	{
		$("#form_verified").val('1');
		$("#uid").focus();
		return false;
	}
}

function check_school_location()
{	
	var student_uid = $("#student_uid").val();
	var school_code = $("#uid").val();
	var location = $("#location").val();
	var form_verified = $("#form_verified").val();
	if(student_uid && school_code && location)
	{
		$.ajax({
			url: "check_school_location.php",
			type: "POST",
			data: "student_uid="+student_uid+"&school_code="+school_code+"&school_location="+location,
			cache: false,
			processData: false,
			success: function (data){
				var msg = data.split('~');
				if(msg[0] == false){
					$("#school_location").html('<i class="fa fa-check"></i>');
					$("#school_location").removeClass('text-danger');
					$("#school_location").addClass('text-success');
					$("#form_verified").val('3');
					
					$("#location").attr('readonly','readonly');
					$("#sch_id").attr('disabled',false);
					$("#sch_id").focus();					
					return false;			   
				}else{
					$("#school_location").html('<i class="fa fa-times"></i>');
					$("#school_location").removeClass('text-success');
					$("#school_location").addClass('text-danger');
					$("#form_verified").val('2');
					
					$("#sch_id").val('');
					$("#sch_id").attr('readonly',false);
					$("#sch_id").attr('disabled','disabled');
					$("#school_name_status").html('<i class="fa fa-times"></i>');
					$("#school_name_status").removeClass('text-success');
					$("#school_name_status").addClass('text-danger');
					
					$("#location").focus();
					return false;			   
				}		   
			},
			error: function(e){
			   alert('Something went wrong!'); 
				return false;			   
			}
		}); 
	}else if(student_uid == "" || (form_verified == 0 && student_uid !="")){
		$("#form_verified").val('0');
		$("#student_uid").focus();
		return false;
	}else if((uid == "") || (form_verified == 1 && uid !="")){
		$("#form_verified").val('1');
		$("#uid").focus();
		return false;
	}else{
		$("#form_verified").val('2');
		$("#location").focus();
		return false;
	}
}

function schoolname_check()
{	
	var student_uid = $("#student_uid").val();
	var school_code = $("#uid").val();
	var location = $("#location").val();
	var sch_id = $("#sch_id").val();
	var form_verified = $("#form_verified").val();
	
	if(student_uid && school_code && sch_id)
	{
		$.ajax({
			url: "check_schoolname.php",
			type: "POST",
			data: "student_uid="+student_uid+"&school_code="+school_code+"&school_name="+sch_id,
			cache: false,
			processData: false,
			success: function (data){
				var msg = data.split('~');
				if(msg[0] == false){
					$("#school_name_status").html('<i class="fa fa-check"></i>');
					$("#school_name_status").removeClass('text-danger');
					$("#school_name_status").addClass('text-success');
					$("#form_verified").val('4');
					
					//$("#sch_id").attr('readonly','readonly');
					
					$("#studentname").attr('disabled',false);
					$("#studentclass").attr('disabled',false);
					$("#studentsection").attr('disabled',false);
					$("#emailsignup").attr('disabled',false);
					$("#password_student").attr('disabled',false);
					$("#cpassword_student").attr('disabled',false);
					$("#mobilesignup").attr('disabled',false);
					$('#register_form input[type="submit"]').attr('disabled',false);
					
					//$("#stydentname").focus();
					return false;			   				
				}
				else
				{
					$("#school_name_status").html('<i class="fa fa-times"></i>');
					$("#school_name_status").removeClass('text-success');
					$("#school_name_status").addClass('text-danger');
					$("#form_verified").val('3');
					
					$("#stydentname").attr('disabled','disabled');
					$("#stydentclass").attr('disabled','disabled');
					$("#studentsection").attr('disabled','disabled');
					$("#emailsignup").attr('disabled','disabled');
					$("#password_student").attr('disabled','disabled');
					$("#cpassword_student").attr('disabled','disabled');
					$("#mobilesignup").attr('disabled','disabled');
					$('#register_form input[type="submit"]').attr('disabled','disabled');
					$("#sch_id").focus();
					return false;			   
				}		   
			},
			error: function(e){
			   alert('Something went wrong!');
				return false;			   
			}
		});
	}
	
	else if((student_uid == "") || (form_verified == 0 && student_uid != ""))
	{
		$("#form_verified").val('0');
		$("#student_uid").focus();
		return false;
	}
	
	else if((uid == "") || (form_verified == 1 && uid !=""))
	{
		$("#form_verified").val('1');
		$("#uid").focus();
		return false;
	}
	
	else if((location == "") || (form_verified == 2 && location !=""))
	{
		$("#form_verified").val('2');
		$("#location").focus();
		return false;
	}
	
	else
	
	{
		$("#school_name_status").html('<i class="fa fa-times"></i>');
		$("#school_name_status").removeClass('text-success');
		$("#school_name_status").addClass('text-danger');
		$("#form_verified").val('3');
		$("#sch_id").focus();
		return false;
	}		
}

function check_validity()
{
	var form_verified = $("#form_verified").val();
	var student_uid = $("#student_uid").val();
	var school_code=$("#uid").val();
	var location=$("#location").val();
	var sch_id = $("#sch_id").val();
	
	if(student_uid == "")
	{
		$("#student_uid").focus();
		return false;
	}
	else if(form_verified == 0)
	{
		$("#student_uid").focus();
		return false;
	}
	else if(school_code == "")
	{
		$("#uid").focus();
		return false;
	}
	else if(form_verified == 1)
	{
		$("#uid").focus();
		return false;
	}
	else if(sch_id == "")
	{
		$("#sch_id").focus();
		return false;
	}
	else if(form_verified == 2)
	{
		$("#location").focus();
		return false;
	}
	else if(location == "")
	{
		$("#location").focus();
		return false;
	}
	else if(form_verified == 3)
	{
		$("#sch_id").focus();
		return false;
	}
	else if(form_verified == 4)
	{
		document.getElementById("register_form").action="rprocessnew.php";
		$("#register_form").submit();
		return true;
	}
	else
	{
		//$("#sch_id").focus();
		return false;
	}
	
}

</script>

    </body>
</html>