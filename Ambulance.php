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
         margin-left: 50px}
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
    opacity:0.3;
    position: absolute;
    left: -80px;
    transition: 0.5s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 3px 3px 0;
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

table {
    border-collapse: collapse;
    width: 75%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #4a148c}
tr:nth-child(odd){background-color: #1565c0}

th {
    background-color: black;
    color: skyblue;
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
            margin-top: -300px}
</style>
</head>
<body>

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
  
  
<div id="mySidenav" class="sidenav">
    
    
  <a href="page2.php" id="signin">Home</a>
  <a href="SignIn.php" id="logout">LogOut</a>
 <!-- <a href="page2.html" id="back">Home</a>-->
  <!--<a href="#" id="contact">Contact</a>-->
</div>     
   
    
</ul>
          <div class="green_banner">
            <div class="page_title">AMBULANCE</div>
        </div>
        <div class="clear"></div>
          <div class="vertical-menu"><br><br>
  <a href="Ambulance.php">Ambulance</a>
  <a href="BloodBank.php">Blood Bank</a>
  <a href="DayCare.php">Day Care</a>
  <!--<a href="Health.php">Health Check Up</a>-->
    <a href="Admission.php">Adimission</a>
</div>
          <p id="img"><img src="img/5.jpg" alt="No Photo" width=""></p>
        <p>
	<br>Hospital name is one of the only private hospitals in Mumbai and more so in Western India to have a comprehensive Level-1 
        Accident &amp; Emergency Department (A&amp;E) for patient care, training and research. The Trauma Centre is reputed to respond
        the fastest in times of accidents, heart attacks, paralytic strokes and such other life-threatening circumstances,
        thus proffering optimum chances of survival and recovery to the affected.</p>
<div class="in-table">
	<table border="1" cellpadding="0" cellspacing="0" class="table_cont" width="100%" >
		<>
			<tr>
				<th>
					International Benchmark</th>
				<th>
					Global Standard</th>
				<th>
                                         Hospital name Performance</th>
			</tr>
			<tr>
				<td>
					<strong>Acute Ischaemic Stroke</strong><br />
					Door to Thrombolysis Time: Less than 60 minutes</td>
				<td>
					29% of the cases</td>
				<td>
					70% of the cases</td>
			</tr>
			<tr>
				<td>
					<strong>Chest Pain</strong><br />
					Door to ECG Time: Less than 10 minutes</td>
				<td>
					40% of the cases</td>
				<td>
					90% of the cases</td>
			</tr>
			<tr>
				<td>
					<strong>Heart Attack</strong><br />
					Door to Thrombolysis Time: Less than 30 minutes</td>
				<td>
					Less than 50% of the cases</td>
				<td>
					75% of the cases</td>
			</tr>
			<tr>
				<td>
					<strong>Door to Doctor Time</strong><br />
					Within 30 minutes</td>
				<td>
					0-120 minutes</td>
				<td>
					0-30 minutes</td>
			</tr>
		
	</table>
</div>


    </body>
</html>
