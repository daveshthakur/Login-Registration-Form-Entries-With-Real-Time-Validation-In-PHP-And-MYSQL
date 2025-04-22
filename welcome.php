<?php 


//include 'library/function.php';
include "config.php";

session_start();


if(!isset($_SESSION["name"]))
	header("location:index.php");
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>:::Welcome to SPACE Astronomy Club:::</title>

  <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
         <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        
        
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.2.min.js"></script>
</head>


<body>
  <div class="container">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
    <td width="79%" align="left" style="background-color:#373a3f; height:100px; margin-bottom:40px; padding:0 0 0px 25px;"><a href="https://space-learning.com" target="_blank"><img src="images/STEPL Logo.png" width="220" height="63"></a></td>
    <td width="21%" align="center" valign="middle" style="background-color:#373a3f; height:100px; margin:15px 0 20px 0;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      
    </table></td>
  </tr>
</table>

           <div id="wrapper-1" style="padding-top:45px;">
               
              <p class="change_link-1"><a href="change-password.php" >Change Password</a><a href="logout.php" >Logout</a></p></td>
               
           <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
      
 <h1>Welcome Astronomer - <?php echo $_SESSION['name'];

?></h1>

  </tr>
  <tr>
    <td colspan="2" style="text-align:justify; padding:5px 20px 0 20px;"><strong>SPACE Astronomy Club</strong> is a unique model that will let you explore surroundings through the intelligent application of astronomy and space science concepts. It is an amalgamation of interactive classroom sessions, projects, events, competitions and trips that runs throughout the academic year.<br />
  <br />
      Along with this, you are going to get opportunities to learn and practice Astronomy through Observations and Hands-On experiments such as handling a telescope, clicking photographs through a professional camera, making model of a celestial object, learning about ancient observatories and many more. Not only this, you will also get an experience of starry night along with a mesmerizing view of Milky Way and various Deep Sky Objects during the visit to Astroport.  <br />
  <br />
      These modules are conducted at two levels, Beginners (Module 1) and Intermediate (Module 2). The modules help in inculcating various inter-personal skills such as:
  <ul><li>Enhancing Scientific Temperament</li>
  <li>Inculcating the spirit of Enquiry and Logical Thinking</li>
  <li>Improving Problem Solving Skills</li>
  <li>Improving Critical Thinking</li>
  <li>Effective Peer Group Interaction</li>
  <li>Improving Presentation Skills</li>
  <li>Encouraging Curiosity</li>
    
  </ul>
  <br />
      
  <strong>Why Astronomy Club?</strong>
  <ul><li>Students get the opportunity to Participate in national and International competitions and projects organized by SPACE, NASA, ESA, ISRO and AWB.</li>
  <li>Widen the scope of school education from text based to hands on based sessions in STEM field.</li>
  <li>Participation in various Outreach events and programs benefit the public and students get exposure to public interaction and awareness.</li>
  <li>SPACE Astronomy club plan and conduct an exclusive ‘Astronomy Day’, the culmination of all activities held during the sessions to showcase what students have learnt, to schools and parents.</li>
  <li>SPACE Astronomy Club prepares students for the future by equipping them with the right knowledge and tools to help them follow their dreams.</li>
  <li>SPACE honors these students by awarding them an ‘Amateur Astronomer’ certificate after successful completion of the Space Club program.</li>
  </ul>
      
      
  </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:justify; padding:5px 20px 0 20px;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align:justify; padding:5px 20px 0 20px;">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"  align="center"> 
     
    
   <div style="width:200px;" > 
                           
      <div id="orderidfield">                   
                                                 <span id="msg_disp" style="color:red;"></span>                                    <p> 
                                    <label for="username" class="uname"><br />Enter Module Code</label>
									
                                  <input type="text" name="orderNumber" id="search" required="required" placeholder="Your Module Number" style="text-transform:uppercase" />
                                </p>
                                <p class="login button" style="padding-right:60px;"> 
                                    <input type="submit" onclick="search()" name="submit" value="Enter" /> 
								</p>
                               
                           
            </div>   
    
</div>
          </td>
  </tr>
           </table>
    </div> 
           
  
    <!--  For Page Footer  -->
<div class="footer">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
    <td class="icons" width="79%" align="left" style="background-color:#373a3f; height:110px; margin-bottom:40px; padding:0 0 0px 25px;"><a href="https://space-india.com/" target="_blank"><img class="webicon" src="images/web icon.png"></a><br /><br /><a href="tel:+917402074020"><img class="callicon" src="images/call icon.png"></a></td>
    <td width="21%" align="center" valign="middle" style="background-color:#373a3f; height:100px; margin:15px 0 20px 0;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">

  
  <tr>
        <td><a href="https://www.facebook.com/SPACEIndiaEdu" target="_blank" onmouseover="MM_swapImage('Image6','','images/facebook-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/facebook.png" alt="Facebook" width="34" height="34" id="Image6" /></a></td>
        <td><a href="https://twitter.com/spacian" target="_blank" onmouseover="MM_swapImage('Image7','','images/twitter-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/twitter.png" width="34" height="34" id="Image7" /></a></td>
        <td><a href="https://www.linkedin.com/company/space-technology-&-education-pvt-ltd" target="_blank" onmouseover="MM_swapImage('Image8','','images/linkedin-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/linkedin.png" width="34" height="34" id="Image8" /></a></td>
        <td><a href="https://www.youtube.com/user/SpaceinternetTV" target="_blank" onmouseover="MM_swapImage('Image9','','images/youtube-hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="images/youtube.png" width="34" height="34" id="Image9" /></a></td>
      </tr>

    </table></td>

</tr>

</table>

</div>


    </div> 

            
            
</div> 
            
            
</div>
            
<script type='text/javascript'> 
function search()
{
    var number=document.getElementById("search").value;
	$.ajax({
            url: "checkfile.php",
            type: "POST",
            data: "number="+number,
            cache: false,
            processData: false,
            success: function (data){
				if(data==number){
               window.open("https://space-learning.com/"+data);
				}else{
					$("#msg_disp").html(data);
				}
            },
            error: function(e){
               alert('Going Something wrong!'); 
            }
        }); 
   
}

</script>
            </body>
</html>