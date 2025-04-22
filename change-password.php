
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::Change Password:::</title>

  <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>

<body>
  <div class="container">
            <!-- Codrops top bar --><!--/ Codrops top bar -->
             <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="79%" align="left" style="background-color:#373a3f; height:100px; margin-bottom:20px; padding:0 0 0px 25px;"><a href="http://www.space-india.com/" target="_blank"><img src="images/space-logo-new.png" width="201" height="56"></a></td>
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
                        
                        
                        
<div id="wrapper">
                        <div id="login" class="animate form">
                        
                        
                            <form action="change-password-process.php" method="POST" autocomplete="on"> 
                                <h1>Change Password</h1> 
                                <h5 style="color: red"><?php echo @$_REQUEST['msg'];?></h5>
	<h5 style="color: green"><?php echo @$_REQUEST['msg1'];?></h5>
                              <p> 
                                    <label for="password" class="youpasswd" data-icon="p" > Old Password </label>
                                  <input id="password" name="oldpass" required type="password" placeholder="Old Password"/>
                                </p>
                                
                                
                                 <p> 
                                    <label for="password" class="youpasswd" data-icon="p" > New Password </label>
                                  <input id="password" name="newpass" required type="password" pattern=".{6,}" title="Six or more characters"  placeholder="New Password"/>
                                </p>
                                      
                                                             
                                <p class="login button"> 
                                    <input type="submit" name="submit" value="Reset Password" /> 
								</p>
                                 <p class="change_link">
									<a href="index.php#username" class="to_register">Login</a> 
								</p>
                            </form>
                        </div></div></section></div>                    
                      
            
                        
</body>
</html>