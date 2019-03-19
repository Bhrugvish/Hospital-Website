<?php
session_start();
require 'dbconfig/config.php';
?>
<!Doctype>
<html>
<head>
  <style>
      .green_banner {width:100%; height:auto; margin:0px 0px 30px; float:left; display:block; background:#04869a;}
.green_banner .page_title {width:90%; display:block; margin:30px auto; font-size:18px; color:#FFF; text-transform:uppercase;}
      .container {width:90%; display:block; margin:auto; font-size:14px;}
.container a {color:#04869a; display:inline-block; position:relative;}
      .contact_table {width:100%; display:table;}
.contact_left {width:50%; height:auto; display:table-cell; padding:0 50px 0 0; vertical-align:top;}
.contact_right {width:50%; height:auto; display:table-cell; vertical-align:top;}
      .contact{text-decoration-line: underline;margin-top: 800px}
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

<div class="inner_page_container">

        <div class="green_banner">
            <div class="page_title">Contact Us</div>
        </div>
        <div class="clear"></div>

        <div class="container ">

            <div class="print_share">
                <a onclick="window.print();return false" title="Print" class="print"><i class="fa fa-print"></i></a>
                <div class="addthis_native_toolbox"></div>
                <div class="clear"></div>
            </div>

            <div class="contact_table">
                

                        <div class="contact_left">
                            <div class="uppercase green_text cont_tl">
                                <img src="images/ic_address.png">
                                How to reach us
                            </div>
                            <div class="clear"></div>
                            <p>
                                ST. VINCENT's Hospital & Research Centre<br>
A-791, Bandra Reclamation, Bandra (W), Mumbai - 400050. India.
                                
                            </p>

                            <div class="map_div no_anim"></div>

                        </div>


                        <div class="contact_right">
                            <!--<div class="contact">
                                
                                <h2 style="text-decoration:underline;color:#04869a">Important Contact Numbers</h2>
                            </div>-->
                            <div class="clear"></div>

                            <table class="contact_nos">
                                <tr>
                                    <td colspan="2"><h2 style="text-decoration:underline;color:#04869a">Important Contact Numbers</h2></td>
                                </tr>
                                <tr>
                                    <td>Emergency/ Casualty</td>
                                    <td><span>+ 91 (22) 2656 8063/ 2656 8064 </span></td>
                                </tr>
                                <tr>
                                    <td>Admission Department</td>
                                    <td><span>+ 91 (22) 2656 8080/ 2656 8081/ 2656 8082</span></td>
                                </tr>
                                <tr>
                                    <td>Appointment - OPD</td>
                                    <td><span>+ 91 (22) 2656 8050/ 2656 8051</span></td>
                                </tr>
                                <tr>
                                    <td>Ambulance</td>
                                    <td><span>9769250010 / 7506358779 </span></td>
                                </tr>
                                <tr>
                                    <td>Billing - Inpatient</td>
                                    <td><span>+ 91 (22) 2675 1586/ 2675 1585</span></td>
                                </tr>
                                <tr>
                                    <td>Billing - OPD</td>
                                    <td><span>+ 91 (22) 2656 8052/ 2656 8053</span></td>
                                </tr>
                                <tr>
                                    <td>Blood Bank</td>
                                    <td><span>+ 91 (22) 2656 8214/ 2656 8215</span></td>
                                </tr>
                                <tr>
                                    <td>Cardiology</td>
                                    <td><span>+ 91 (22) 2656 8236</span></td>
                                </tr>
                                <tr>
                                    <td>CT Scan Department</td>
                                    <td><span>+ 91 (22) 2656 8044</span></td>
                                </tr>
                                <tr>
                                    <td>Dental</td>
                                    <td><span>+ 91 (22) 26568019/ 8078</span></td>
                                </tr>
                                <tr>
                                    <td>Dermatology</td>
                                    <td><span>+ 91 (22) 2656 8020</span></td>
                                </tr>
                                <tr>
                                    <td>EMG/ EEG</td>
                                    <td><span>+ 91 (22) 2656 8249/ 8250</span></td>
                                </tr>
                                <tr>
                                    <td>Endoscopy</td>
                                    <td><span>+ 91 (22) 2656 8056</span></td>
                                </tr>
                                <tr>
                                    <td>ENT/ Audiometry</td>
                                    <td><span>+ 91 (22) 2656 8232</span></td>
                                </tr>
                                <tr>
                                    <td>Health Check-up Department</td>
                                    <td><span>+ 91 (22) 2656 8354/ 2656 8355</span></td>
                                </tr>
                                <tr>
                                    <td>Hospital Board Line</td>
                                    <td><span>+ 91 (22) 2675 1000/ 2656 8000</span></td>
                                </tr>
                                <tr>
                                    <td>Hospital Fax</td>
                                    <td><span>+ 91 (22) 2640 5119 /  2640 7655</span></td>
                                </tr>
                                <tr>
                                    <td>IVF</td>
                                    <td><span>+ 91 (22) 2656 8226</span></td>
                                </tr>
                                <tr>
                                    <td>MRI Department</td>
                                    <td><span>+ 91 (22) 2656 8066</span></td>
                                </tr>
                                <tr>
                                    <td>Nuclear Medicine</td>
                                    <td><span>+ 91 (22) 2656 8092</span></td>
                                </tr>
                                <tr>
                                    <td>Ophthalmology</td>
                                    <td><span>+91 (22) 2656 8229</span></td>
                                </tr>
                                <tr>
                                    <td>Physiotherapy</td>
                                    <td><span>+ 91 (22) 2675 1536/ 1537</span></td>
                                </tr>
                                <tr>
                                    <td>Report Dispatch Counter</td>
                                    <td><span>+ 91 (22) 2675 1620</span></td>
                                </tr>
                                <tr>
                                    <td>Sample Collection Room</td>
                                    <td><span>+91 (22) 2656 8030</span></td>
                                </tr>
                                <tr>
                                    <td>TPA Cell</td>
                                    <td><span>+ 91 (22) 2656 8089</span></td>
                                </tr>

                                <tr>
                                    <td>X-Ray, Sonography Department</td>
                                    <td><span>+91 (22) 2656 8031</span></td>
                                </tr>
                                <tr>
                                    <td>Visa Section</td>
                                    <td><span>+ 91 (22) 2656 8248</span></td>
                                </tr>


                            </table>

                            <div class="uppercase green_text cont_tl">
                                <img src="images/ic_email.png">
                                Email Address
                            </div>
                            <div class="clear"></div>

                            <a href="mailto:lilaweb@stvincenthospital.com" style="color: #000;">lilaweb@stvincenthospital.com</a>



                        </div>

                    
            </div>

            <div class="clear"></div>
        </div>

        <div class="clear"></div>
    </div>
    </body>
    </html>
