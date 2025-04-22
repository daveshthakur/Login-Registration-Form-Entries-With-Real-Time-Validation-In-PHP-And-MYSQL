
<?php

include('library/function.php');

$uniqueid = "";
   	
$arr="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
$arr1='0123456789';
$a=str_shuffle($arr);
$b=str_shuffle($arr1);
for($i=0;$i<3;$i++)
{
$uniqueid.=$a[rand($i, strlen($a)-1)];
$uniqueid.=$b[rand($i, strlen($b)-1)];

}

if (isset($_POST['submit'])) {
    $con = new mysqli('localhost', '', '', '');
    
$name = $con->real_escape_string($_POST['name']);
$email = $con->real_escape_string($_POST['email']);
$pass = $con->real_escape_string($_POST['pass']);
$student_uid = $con->real_escape_string($_POST['student_uid']);
$uid = $con->real_escape_string($_POST['uid']);
$school_location = $con->real_escape_string($_POST['school_location']);
$sname = $con->real_escape_string($_POST['sname']);
$class = $con->real_escape_string($_POST['class']);
$section = $con->real_escape_string($_POST['section']);
$mobile = $con->real_escape_string($_POST['mobile']);
    
          $hash = md5(rand(1000,9999));
        
            $con->query("INSERT INTO user1 (userid,schoolcode,school_location,schoolname,name,class,section,email,pass,mobile,hash,active,uniqueid) VALUES ('$student_uid', '$uid', '$school_location', '$sname', '$name', '$class', '$section', '$email', '$pass', '$mobile', '$hash', '0', '$uniqueid');
				");

        
        $to      = $email;
        $subject = "Signup | Verification For Space Astronomy Club Portal";
        $message = "  Hi  .$name.,
     
        Welcome to the World of ASTRONOMY!
        
        You have successfully registered for the SPACE Astronomy Club. Now, you are just one click away to activate your account.<br>For activation, you need to click the given link and enter the Username as well as Password provided below.
         
        ---------------------------------------
        Username: '.$email.'
        Password: '.$pass.'
        ---------------------------------------
        
        Please click this link to activate your account-
        ''
        
        SPACE Astronomy Club page has all the required data that you may need through the various club sessions, such as: 
        
          - Reading Material
        
          - Further Reading
        
          - Challenge Yourself and Many More
        
        We are also providing you with a Unique ID that you can use for being a lifetime beneficiary of SPACE products.
        
        You may get the following benefits using this Unique ID!
        Your Unique ID: '.$uniqueid.'
        
        Whenever there will be a new release of any new product then you will get the privilege to use it.
        
        You will get the life time membership for same even if you have completed the module1 and module 2.
        
        Moreover, you will be getting discounts on a number of space products like, Astroport Visits, Astronomers Tool, etc.
        Any offer can be taken only once per Unique id.
        
         ";
         
         
        // Our message including the link
        $headers = 'From:SPACE India <getintouch@space-india.com>' . "\r\n"; // Set from headers
        
        // Set from headers
        mail($to, $subject, $message, $headers);
        
    echo '<script type="application/javascript">alert("Please Click The Activation Link That Has Been Sent To Your Email!");window.location.href = "index.php";</script>';
    } 
    
    else
    {
        echo '<script type="application/javascript">alert("Error! Try Again..");window.location.href = "index.php#toregister";</script>';
    } 


?>