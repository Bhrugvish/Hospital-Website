<?php
session_start();
require 'dbconfig/config.php';
?>
<!DOCTYPE>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<style>
      
      .green_banner {width:100%; height:auto; margin:0px 0px 30px; float:left; display:block; background:#04869a;}
.green_banner .page_title {width:90%; display:block; margin:30px auto; font-size:18px; color:#FFF; text-transform:uppercase;}
      .container {width:90%; display:block; margin:auto; font-size:14px;}
.container a {color:#04869a; display:inline-block; position:relative;}
      h1{color: #04869a}
      p{font-size: 20px}
      
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
    background-color: white;
    
}
    




        .up a{background-color:seagreen;
                color: white}

        .dropdown-content a:hover {background-color: #111;color: aqua
    
        }
        .dropdown:hover .dropdown-content {
    display: block;
    background-color: black;
    color: aqua
}
        .logo a{padding: 0px;
         margin-left:50px}
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
          right:710px;;
          top: 18px
          
      }
      .heading{font-family: "Times New Roman", Times, serif;
               font-size:60px;
               line-height: 0.8;
            word-spacing: 9px;
            color:#4a148c}
      .blue{color: #1565c0}
#mySidenav a {
    opacity:0.5;
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 2px 2px 0;
}

#mySidenav a:hover {
    left: 0;
}

#signin {
    top: 20px;
    background-color: blue;
}

#logout {
    top: 80px;
    background-color: blue;
}

#back {
    top: 140px;
    background-color: blue;
}

#contact {
    top: 200px;
    background-color: blue;
}
    .vertical-menu {
    width: 200px;
    margin-top: 120px
}

.vertical-menu a {
    background-color: #333;
    color: white;
    display: block;
    width:150px;
    padding: 12px;
    text-decoration: none;
    margin-top: 1px
    
}

.vertical-menu a:hover {
    background-color: deepskyblue;
    color:white;
}

.vertical-menu a.active {
    background-color:black;
    color: seagreen;
}
    .Slider{margin-left: 200px;
     margin-top: -210px}
    #Services{margin-left: 200px;
     
     margin-top: -100px}
    #img{margin-left: 200px;
            margin-top: -200px}

</style>
</head>

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
<div class="logo"> <a href="page2.php">
<img src="img/img9.png" width="150" height="120">
        </a></div>
     


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
        <li style="display: inline-block;
    color:white;
     padding: 14px 16px;
    text-decoration: none;
    margin-left:800px;">
	Hi,<?php
 
  $sql= mysqli_query($con, "SELECT Fname, email FROM user where email='" . $_SESSION['email']."'");

$row=mysqli_fetch_array($sql);
  echo  $row['Fname'];
  ?></li>
  
  
   
    
</ul>
          <div class="green_banner">
            <div class="page_title">DAY CARE</div>
        </div>
        <div class="clear"></div>
          <div class="vertical-menu"><br><br>
  <a href="Ambulance.php">Ambulance</a>
  <a href="BloodBank.php">Blood Bank</a>
  <a href="DayCare.php">Day Care</a>
 <!-- <a href="Health.php">Health Check Up</a>-->
    <a href="Admission.php">Adimission</a>
</div>






   
        

<div id="mySidenav" class="sidenav">
    
    
 <a href="page2.php" id="signin">Home</a>
  <a href="SignIn.php" id="logout">LogOut</a>
 <!-- <a href="page2.html" id="back">Home</a>-->
  
</div> 
        <img id="img" src="img/Daycare.jpg" alt="No Photo">
        <div class="tab_content">
                                    <p>
	Day-Care centre cater to the patients undergoing surgeries and procedures that do not require overnight stay in the hospital.</p>
<p>
	Our ground floor daycare is just adjacent to the peri-operative suites and it caters to all medical and surgical procedures whereas our 8th floor daycare centre is equipped to handle and ensure safe and friendly environment for patients receiving chemotherapy and supportive treatments for cancer. Both the day care centres are manned by a team of highly skilled and experienced nurses</p>
<p>
	The day-care department is open from 7:00am to 8:00pm. Admission into Daycare is done only on doctor&rsquo;s advice.</p>
                                    <div class="clear"></div>
                                </div>

    </body>
</html>
