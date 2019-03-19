<?php
 require 'dbconfig/config.php';

?>

<!Doctype>
<html>
 <title>Sign UP</title>
 <style>
    body{
	 /*background-image:url(Background1.jpg);*/
        background-color: white;
	}
     
     #style1
     {
         background: rgba(19, 35, 47, 0.9);
  padding: 40px;
  max-width: 600px;
  margin-top:45px;
  border-radius: 4px;
  box-shadow: 0 4px 10px 12px rgba(19, 35, 47, 0.3);
     }
    input[type=text]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color:rgba(19, 35, 47, 0.9);
    color: white;
	border-radius:0px;
         border: 1px solid #a0b3b0;
	
	}
	input[type=password]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color:rgba(19, 35, 47, 0.9);
    color: white;
	border-radius:0px;
        border: 1px solid #a0b3b0;
	
	}
     input[type=password]:focus
     {
         border-color: #1ab188;
     }
	input[type=submit]
	{
	  width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: rgb(196,62,79);
    color: white;
	border-radius:4px;
	
	}
     input[type=submit]:hover{
         background-color:rgb(196,40,79) 
     }
	select
	{
	 width: 100%;
	 padding: 16px 20px;
	 border:node;
	 border-radius:0px;
	 background-color:rgba(19, 35, 47, 0.9);
     color: white;
	}
    div.style2
	    {
		font-family:serif;
		font-style:italic;
		font-size:50px;
		word-spacing:20px;
		text-align:center;
	    height:80px;
	    background-color:white;
		color:white;
		text-shadow:1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
		}
	.st1 {
    /*position: absolute;
    top: 60px;
    right: 0;*/
	font-size:20;
    width: 100%;
    height: 20px;
    margin-left:180%;
    color: white;
    
	text-shadow:0px 0px black;
}
a:link, a:visited {
    background-color: #444;
    color: ;
    padding: 2px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:4px;
}
     .st1 a{background-color:red;
         color: white
            }


a:hover, a:active {
    background-color: rgb(128,128,128);
	box-shadow: 0 12px 10px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
     
 </style>
    
 <script type="text/javascript">
   function validate()
   {
    var Fname=document.SignUP.fname.value;
	var Surname=document.SignUP.surname.value;
	var Email=document.SignUP.email.value;
	var Mno=document.SignUP.mno.value;
	var Password=document.SignUP.password.value;
	var chk_name=/^[A-Za-z]{3,20}$/;
	var chk_surname=/^[A-Za-z]{3,20}$/;
	var chk_email=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var chk_mno=/[0-9]{10}/;
	var chk_password=/^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
	var error=[];
	if(!chk_name.test(Fname))
	{
	 error[error.length]="Enter valid name.";
	}
	if(!chk_surname.test(Surname))
	{
	 error[error.length]="Enter valid surname.";
	}
	if(!chk_email.test(Email))
	{
	 error[error.length]="Enter valid Email Id.";
	}
	if(!chk_mno.test(Mno))
	{
	 error[error.length]="Enter Valid Phone No.";
	}
	if(!chk_password.test(Password))
	{
	 error[error.length]="Enter valid Password.";
	}
       if ( ( SignUP.gender[0].checked == false ) && ( SignUP.gender[1].checked == false ) ) 
{
//alert ( "Please choose your Gender: Male or Female" ); 
//return false;
    error[error.length]="Please choose your Gender:";
}
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
 
    <!--navigation bar-->
    
     <style>
 ul {
    list-style-type: none;
    margin-top: 5px;
    padding:6px;
    overflow: hidden;
    background-color:#333;
            float: right;
            width:100%;

            
                
            
}

li {
    float: left;
    text-align: center;
    font-size:17px
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
    background-color: white;
    
}
    




        .up a{background-color:seagreen;
                color: white}

        .dropdown-content a:hover {background-color: #111;color: aqua
    
        }
        .dropdown:hover .dropdown-content {
    display: block;
    background-color: white;
    color: aqua
}
        .logo a{padding: 0px;
         margin-left: 0px}
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
          right:800px;;
          top: 18px
          
      }
      .heading{font-family: "Times New Roman", Times, serif;
               font-size:60px;
               line-height: 0.8;
            word-spacing: 9px;
            color:#4a148c}
      .blue{color: #1565c0}
</style>

   <!-- <div class="Emergency">
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
    

<ul>
    <li class="dropdown">
     
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
  <li><a href="SignIn.php">Sign In</a></li>
  
    </div>
  </li>
        </li>
 
</ul>-->
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
     


<ul class="uo">
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
  <li><a href="SignIn.php">Sign In</a></li>
  
    </div>
  </li>
        </li>
    
</ul>
   

    
    
    <!--navigation bar-->
    
    
 <body>
 <!--<div class="style2">HOSPITAL MANAGEMENT SYSTEM</div>-->
 <div id="style1">
     <form name="SignUP" method="post" action="" onsubmit="return validate()">
   <table align="center">
 <tr>
   <th colspan="3" align="center" style="background-color:#179b77;font-size:30px;color:white; ">Sign Up</th>
 </tr>
 <tr>
  <td colspan="2"><input  type="text" name="fname" Placeholder="First Name" required>
  <td colspan="2"><input type="text" name="surname" placeholder="Surname" required>
 </tr>
 <tr>
  <td colspan="4"><input type="text" name="email" placeholder="Email Address" required>
 </tr>
 <tr>
  <td colspan="4"><input type="text" name="mno" placeholder="Mobile Number" required>
 </tr>
 <tr>
  <td style="color:white;">Password
 </tr>
 <tr>
  <td colspan="4"><input type="password" name="password" placeholder="User Password" required>
 </tr>
       <tr>
  <td colspan="4"><input type="password" name="cpassword" placeholder="Confirm Password" required>
 </tr>
 <tr>
  <td style="color:white;">Birthday
 </tr>
 <tr>
  <td> <select id="day_start" 
          name="day_start" required=""> 
    <option value="">DAY</option>
    <option value="op1" >1</option>       
    <option value="op1">2</option>       
    <option value="op1">3</option>       
    <option value="op1">4</option>       
    <option value="op1">5</option>       
    <option value="op1">6</option>       
    <option value="op1">7</option>       
    <option value="op1">8</option>       
    <option value="op1">9</option>       
    <option value="op1">10</option>       
    <option value="op1">11</option>       
    <option value="op1">12</option>       
    <option value="op1">13</option>       
    <option value="op1">14</option>       
    <option value="op1">15</option>       
    <option value="op1">16</option>       
    <option value="op1">17</option>       
    <option value="op1">18</option>       
    <option value="op1">19</option>       
    <option value="op1">20</option>       
    <option value="op1">21</option>       
    <option value="op1">22</option>       
    <option value="op1">23</option>       
    <option value="op1">24</option>       
    <option value="op1">25</option>       
    <option value="op1">26</option>       
    <option value="op1">27</option>       
    <option value="op28">28</option>       
    <option value="op29">29</option>       
    <option value="op30">30</option>       
    <option value="op31">31</option>       
  </select>
   <td><select id="month" 
          name="month_start">
    <option>Month</option>		  
    <option>January</option>       
    <option>February</option>       
    <option>March</option>       
    <option>April</option>       
    <option>May</option>       
    <option>June</option>       
    <option>July</option>       
    <option>August</option>       
    <option>September</option>       
    <option>October</option>       
    <option>November</option>       
    <option>December</option>       
  </select>
 
 <td><select id="year_start" 
         name="year_start" /> 
	<option>Year</option>
    <option>1998</option>       
    <option>1997</option>       
    <option>1096</option>       
    <option>1995</option>       
    <option>1994</option>       
    <option>1993</option>       
    <option>1992</option>       
    <option>1991</option>       
    <option>1990</option>       
     <option>1989</option>
    <option>1988</option>       
    <option>1987</option>       
    <option>1086</option>       
    <option>1985</option>       
    <option>1984</option>       
    <option>1983</option>       
    <option>1982</option>       
    <option>1981</option>       
    <option>1980</option>       
     <option>1979</option>
    <option>1978</option>       
    <option>1977</option>       
    <option>1076</option>       
    <option>1975</option>       
    <option>1974</option>       
    <option>1973</option>       
    <option>1972</option>       
    <option>1971</option>       
    <option>1970</option>       
    <option>1969</option>
    <option>1968</option>       
    <option>1967</option>       
    <option>1066</option>       
    <option>1965</option>       
    <option>1964</option>       
    <option>1963</option>       
    <option>1962</option>       
    <option>1961</option>       
    <option>1960</option> 
  </select>
 </tr>
 <tr>
  <td style="color:white;"><input type="radio" name="gender" value="male">Male
  <td style="color:white;"><input type="radio" name="gender" value="female">Female
 </tr>
 <tr>
   <div><td align="center"><input type="submit" name="submit_bt" value="Create Account">
       <div class="st1"> have account? <a href="SignIn.php">Sign In</a></div></div>
    
 </tr>
     
</table>
	
  
  </form></div>
<div class="background"> <img src="img/img8.jpg" height="550"></div>
<?php
    if(isset($_POST['submit_bt']))
    {
        // echo '<script type="text/javascript">alert("Submit button clicked")</script>';
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $Fname=$_POST['fname'];
        $Sname=$_POST['surname'];
        
        if($password==$cpassword)
        {
            $query="select * from user WHERE email='$email'";
            $query_run=mysqli_query($con,$query);
            if(mysqli_num_rows($query_run)>0)
            {
                echo '<script type="text/javascript">alert("User already Exist.try anothe email id")</script>';
            }
            else
            {
               $query="insert into user values('$Fname','$Sname','$email','$password')";
               $query_run=mysqli_query($con,$query);
                if($query_run)
                     echo '<script type="text/javascript">alert("Registeration successful....Go to login page to log in.")</script>';
                else
                     echo '<script type="text/javascript">alert("Failed to Register")</script>';
            }
        }
        else
             echo '<script type="text/javascript">alert("Enter correct matching password.")</script>';
        
    }
    
 ?> 
  <!--ST VINCENT'S HOSPITAL-->
 </body>
</html>