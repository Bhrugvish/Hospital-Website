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
        <style type="text/css">
       #style2{text-align:center;} 
       body
	{
	  background-image:url("appointment.jpg");background-position:center;background-repeat:no-repeat;  }
</style>
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
          right:817px;;
          top: 18px
          
      }
      .heading{font-family: "Times New Roman", Times, serif;
               font-size:60px;
               line-height: 0.8;
            word-spacing: 9px;
            color:#4a148c}
      .blue{color: #1565c0}

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
      <a href="Accomodation1.php">Accomodation</a>
      <a href="Inpatients1.php">Inpatients</a>
      
        <a href="Tarrif1.php">Tarrif</a>
    
 
      
      <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Visitors</a>
    <div class="dropdown-content">
      <a href="VIsitingHours1.php">Visiting Hours</a>
      <a href="Conve&Facilities1.php">Convenience and Facilities</a>
      <a href="Dos&Donts1.php">Do's and Dont's</a>
        <a href="VisitorsPolicy1.php">Visitors Policy</a>
  <li><a href="ContactUs1.php">Contact Us</a></li>
  <li><a href="AboutUs1.php">About Us</a></li>
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
  
  
    </div>
  </li>
        </li>
    
</ul>
       <p><h1> Admission Form</h1>
      <p>If you require help completing the Application Form or require it in any other Language please<br>
          contact the Hospital Desk on 08787343265<br>
          <strong><u>Please complete in BLOCK Letter</u></strong>
          <hr>
<p id="change1">
  <div style="background:gray">
   
      <span style="color:black;font-weight:bold;font-size:25px;"><center>PATIENT CONTACT INFORMATION</center></span>
  </div><br>
  	<FORM METHOD="POST" NAME="Myform"> 
            <pre>
		FullName      :&nbsp;&nbsp;<input type="text" name="user"><br><br>
                Father's Name :&nbsp;&nbsp;<input type="text" name="user"><br><br>
                Mother's Name :&nbsp;&nbsp;<input type="text" name="muser"><br><br>
                Age           :&nbsp;&nbsp;<input type="text" name="Age" maxlength="2"><br><br>
                Adderss       :&nbsp;&nbsp; <input type="text" name="Address" maxlength="40"><br><br>
                Email         :&nbsp;&nbsp;<input type="text" name="pass"><br><br>
                Gender<br> 
                <input type="radio" name ="Gender" value="Male">Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="Gender" value="Female">Female<br><br>
                 Doctor : <input type="text" name="Doctor" maxlength="30"><br><br>
               Speciality<select>
	       <option value="1">Anaesthesiology</option>
                <option value="35">Andrology</option>
                <option value="8">Diabetology</option>
                <option value="9">ENT</option>
                <option value="43">Gastro Intestinal Surgery</option>
                <option value="11">Gastroenterology</option>
                <option value="12">General Surgery</option>
                <option value="40">Gynecology</option>
                <option value="13">Haematology</option>
                <option value="60">Hair Transplant</option>
                <option value="14">Headache and Migraine</option>
                <option value="57">Infectious diseases</option>
                <option value="47">Interventional Radiology</option>
                <option value="63">Lactation Consultant</option>
                <option value="41">Minimal Invasive Surgery( Laproscopic Surgery)</option>
                <option value="16">Nephrology</option>
                <option value="45">Neuro-Surgery</option>
                <option value="17">Neurology</option>
                <option value="18">Neuropsychology</option>
                <option value="38">Nuclear Medicine</option>
                <option value="19">Oncology</option>
                <option value="20">Oncosurgery/Surgical Oncology</option>
                <option value="21">Ophthalmology</option>
                <option value="37">Orthopaedic Surgery</option>
                <option value="58">Paediatric Neurology</option>
                <option value="46">Paediatric Surgery</option>
                <option value="22">Paediatrics</option>
                <option value="23">Pathology</option>
                <option value="59">Pediatric Cardiology</option>
                <option value="24">Physician/Internal Medicine</option>
                <option value="25">Physiotherapy</option>
                <option value="26">Plastic Surgery</option>
                <option value="33">Psychiatry</option>
                <option value="27">Psychologist</option>
                <option value="28">Radiology and Imaging</option>
                <option value="34">Respriatory</option>
                <option value="29">Rheumatology</option>
                <option value="44">Spine Surgery</option>
                <option value="62">Urodynamics</option>
                <option value="31">Urology</option>
                <option value="32">Vascular Surgery</option>

             </select><br><br>
               <input type="Submit" value="Submit" onclick="" name="Submit">
 </pre>
<a href="page2.php">Back</a> 
       
	</FORM>  
    </body>
</html>
