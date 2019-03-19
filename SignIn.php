<?php
session_start();
 require 'dbconfig/config.php';
?>
<?php
if(isset($_POST['sub_btn']))
      {
          $email=$_POST['email'];
          $password=$_POST['password'];
          $query="select email,password from user where email='$email' and password='$password'";
          $query_run=mysqli_query($con,$query);
          if(mysqli_num_rows($query_run)>0)
          {
             //valid
              $_SESSION['email']=$email;
              header('location:page2.php');
          
         }
          else
          {
              //invalid
              echo'<script type="text/javascript">alert("Invalid credentials:")</script>';
              
          }
      }
?>
<!doctype>
<html>
 <head><title>Sign In</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
    <style>
        .form{width:600px;margin-left:675px;margin-top:130px;  background:#1c2B4A}
        .header{height:44px;color: white;text-align:center;
             background:#17233B}
        .header h2{height:44px; line-height:44px;}


	body
	{
	  background-image:url();
        
	  
	}
        
	#bg{
	 background-image:url("chg_hospitalBeds_Background_purchasing.png");
	 background-repeat:no-repeat;
	}
	table
	{
	 width:90%;
	 margin-top: 0px;
	 margin-right:20px;
	}
	 div.style2
	    {
		font-family:serif;
		font-style:italic;
		font-size:50px;
		word-spacing:20px;
		//text-align:center;
	    height:100px;
	    background-color:none;
		color:white;
		text-shadow:1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
		position:relative;
		left:120px;
		}
	div.st1 {
    position: absolute;
    top: 60px;
    right: 10px;
	font-size:20;
    width: 100px;
    height: 20px;
    
	text-shadow:0px 0px black;
}
.up a:link,.up a:visited {
        background-color: #333;
    color: aqua;
    padding: 2px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius: 4px;
	margin:3px;
	cursor:pointer;
}
        


.up a:hover,.up a:active {
    background-color: green;
	box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);color: white
}
        .up a{background-color: red}
input[type=text]
	{
	  width: 90%;
    padding: 12px 20px;
    //margin:8px 0;
        margin-left: 47px;
        margin-top: -43.5px;
    box-sizing: border-box;
    border: none;
    background-color:#12192C;
    color: white;
	border-radius:4px;
	
	}
	input[type=password]
	{
	  width: 90%;
    padding: 12px 20px;
   // margin: 8px 0;
    margin-left: 47px;
    margin-top: -43.5px;
    box-sizing: border-box;
    border: none;
    background-color:#12192C;
    color: white;
	border-radius:4px;
	
	}
	input[type=text]:focus {
    background-color:#12192C;
	}
	input[type=password]:focus {
    background-color:#12192C;
	}
	input[type=submit]
	{
	  width: 100%;
    font-size: 20px;
    font-weight: bold;
    border:none;
    outline: none;
    border-bottom: solid 5px #093;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color:#0c6;
    color: #eee;
	border-radius:3px;
	cursor:pointer;
	
	}
        input[type=submit]:hover{
            
            background-color: #0c2;
        
        }
        
	img{ position: relative;
    left:-80px;
	top:0px;}
    .up{text-align: right;
        font-size: 16px}
        .ac{color:#eee;}
    span.un{display:inline-block; vertical-align:top; height:42px; line-height:40px; background:#12192C}
        
        ul {
    list-style-type: none;
    margin-top: 5px;
    padding: 0px;
    overflow: hidden;
    background-color:#333;
            float: right;
            width:100%;
            
                
            
}

li {
    float: left;
    text-align: center;
    font-size: 17px
}

li a, .dropbtn {
    display: inline-block;
    color:aqua;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:#111;
    
    
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
  background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    
}

.dropdown-content a {
    color:black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align:left;
    background-color:white;
    
}
    



        
        .up a{background-color:;
                color: white}

        .dropdown-content a:hover {background-color: #111;color: aqua
    
        }
        .dropdown:hover .dropdown-content {
    display: block;
    background-color: black;
    color: aqua
}
        .logo a{padding: 0px;
         margin-left: 80px}
        .video{color:brown;margin-left:100px}
     
        
    .background{position: absolute;
                left: 0px;
                 top:137px;
                z-index: -1; }
        .background img{width:100%}
        .un i{margin-top: 10px}
        span.un{width:10%; text-align:center; color:#0C6; border-radius:3px 0 0 3px;margin-left:-5px;margin-top: 0px}
/*span.un{display:inline-block; vertical-align:top; height:40px; line-height:40px; background:#12192C;}*/
.contact{float:right;margin-top:100px; }
    .Emergency{float: right;margin-top: 10px;margin-right: 20px;}
      .heading{
          position: absolute;
          right:810px;;
          top: 18px;
          
          
      }
      .heading{font-family: "Times New Roman", Times, serif;
               font-size:60px;
               line-height: 0.8;
            word-spacing: 9px;
          margin-right: -20px;
            color:#4a148c}
      .blue{color: #1565c0}
        
        .button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}


        
 </style>
 <script type="text/javascript">
    function validate()                                              //validation
	{
	 //alert("Inside validate");
	 var email=document.SignIn.email.value;
	 var password=document.SignIn.password.value;
	 var ck_password = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	 var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	 var error=[];
	 if(!ck_email.test(email))
	 {error[error.length]="Enter Your Valid Email Id";}
	 if(!ck_password.test(password))
	 {error[error.length]="Enter valid Password";}
	 if (error.length > 0) 
	 { reportErrors(error);
        return false; 
	 } 
	 else
	 return true; 
	  
	 function reportErrors(error)
	 { 
	 var msg = "Please Enter Valide Data...\n";
	 for (var i = 0; i<error.length;i++) 
	 { var numError = i + 1; msg += "\n" +numError + ". " + error[i]; }
	 alert(msg); }
	 
	}
 
 </script>                                  
     <script src="jquery-3.2.0.js"></script>                         
<script type="text/javascript">
  $(document).ready(function(){                                       //Show Password
      $('#showp').click(function(){
          $('#txtp').attr('type', $(this).is(':checked') ? 'text' : 'password');
      });
  });
    
</script>
 
 
 </head>
 <body>
 <!--<div class="style2"><img src="bg3.gif">HOSPITAL MANAGEMENT SYSTEM<br><!<H5 STYLE="COLOR:BLACK;FONT-SIZE:20PX;position:absolute;bottom:-350px;left:175px;text-shadow:none;font-weight:bold;font-size:22px;">"WE CARE WITHOUT SCARE"</H5></div>-->
     <div class="heading">ST VINCENT'S<br><div class="blue"> HOSPITAL</div></div>
     <div class="Emergency">
        <div class="e1">
          <strong>Emergency</strong><br/>
          +91 (22) 2656 8063 / 64
        </div>
        <div class="b1">
          <strong>Boardline</strong>
             <br />
            +91 (22) 2675 1000 /
            +91 (22) 2656 8000

        </div>
    </div>
<div class="logo"> <a href="HomePg.php">
<img src="img/img9.png" width="150" height="120">
        </a></div>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
     


<ul>
    <li class="dropdown">
     <!--<a href="javascript:void(0)" class="dropbtn">Patients</a><li>-->
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Patients</a>
    <div class="dropdown-content">
      <a href="Accomodation.php">Accomodation</a>
      <a href="Inpatients.php">Inpatients</a>
      
        <a href="Tarrif.php">Tarrif</a>
    
 
      
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Visitors</a>
    <div class="dropdown-content">
      <a href="VIsitingHours.php">Visiting Hours</a>
      <a href="Conve&Facilities.php">Convenience and Facilities</a>
      <a href="Dos&Donts.php">Do's and Dont's</a>
        <a href="VisitorsPolicy.php">Visitors Policy</a>
  <li><a href="ContactUs.php">Contact Us</a></li>
  <li><a href="AboutUs.php">About Us</a></li>
  <li><a href="SignUp.php">Sign Up</a></li>
  
    </div>
  </li>
        </li>
    
  
</ul>
    
     
     <meta name="viewport" content="width=device-width, initial-scale=1">

     
  
         
<div class="form"> 
     
     <form name="SignIn" method="post" onsubmit="return validate()"><div class="header"><h2>Sign In</h2></div>
    
   <table align="center">
   <!-- <tr>
   <th  align="left" style="background-color:gray;font-size:30px;border-radius:4px"></th>
 </tr>-->
     <tr>
	    <td style="color:white;">Email:
	 </tr>
	 <tr>
         <td><span class="un"><i class="fa fa-user"></i></span><input type="text" name="email" placeholder="User Email" >
	 </tr>
	 <tr>
	    <td style="color:white;">Password:
	 </tr>
	 <tr>
         <td><span class="un"><i class="fa fa-lock"></i></span><input type="password" name="password" id="txtp" placeholder="User Password" >
	 </tr>
     <tr>
       <td style="color:white;"><input type="checkbox" id="showp"> Show Password</td>
     </tr>
	 <tr>
         <td><input type="submit" name="sub_btn" value="Log In" class="button" >
	 </tr>
	 <tr>
         <td ><div class="ac">Don't have user account?</div><div class="up"><a href="SignUP.php" >Sign Up here</a></div></td>
	 </tr>
	</table>
     </form>
</div>
         <div class="background"> <img src="img/img5.jpg" height="525"></div>
          
    
          


</body>
     
 </html>