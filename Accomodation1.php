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
      .contact{text-decoration-line: underline}
     .green_text{color:#04869a}
    h2{color:#04869a }
    
     .uo {
    list-style-type: none;
    margin-top: 5px;
    padding: 0px;
    overflow: hidden;
    background-color:#333; /*its here*/
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
    .acd_table{background-color:}
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
     


<ul class="uo">
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
            <div class="page_title">Accommodation</div>
        </div>
        <div class="clear"></div>

        <div class="container">

            <div class="content_main_box text_format">

                
                <div class='inner_banner'><img src="img/img12.jpg"></div>

                <div class="print_share">
                    <a onclick="window.print();return false" title="Print" class="print"><i class="fa fa-print"></i></a>
                    <div class="addthis_native_toolbox"></div>
                    <div class="clear"></div>
                </div>


                <div class="tabber">

                    
                            <div class="tabbertab">
                                <h2>Common  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
	<a class="fancybox" href="" title="Common Room"><img src="" /></a></div>
<div class="acd_table">
	<ul class="bullet">
		<br>
			Number of Beds/ Room : <strong>Six patients per room</strong></li>
		<br>
			Toilet &amp; Washroom : <strong>Shared Facility outside the room</strong></li>
		<br>
			Bed for Attendant : <strong>Not Available</strong></li>
		<br>
			Sofa Set/ Chairs : <strong>One Chair</strong></li>
		<br>
			Type of Bed for patients : <strong>Manually Operated</strong></li>
		<br>
			Television : <strong>Not Available</strong></li>
		<br>
			Telephone : <strong>One Telephone for Six patients</strong></li>
		
			Refrigerator : <strong>Not Available</strong>
		
			<br>No. of Passes : <strong>24 Hrs. &ndash; 1 Pass &amp; Visiting Hrs &ndash; 1 Pass</strong>
		
			<br>Internet Access : <strong>No</strong>
	</ul>
</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Economy  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
	<a class="fancybox" href="../images/accommodation/economy.jpg" title="Economy Room"><img src="../images/accommodation/economy.jpg" /></a></div>
<div class="acd_table">
	<ul class="bullet">
		<br>
			Number of Beds/ Room : <strong>Three patients per room</strong></li>
		<br>
			Toilet &amp; Washroom : <strong>Attached Toilet-cum-Bath</strong></li>
		<br>
			Bed for Attendant : <strong>Not Available</strong></li>
		<br>
			Sofa Set/ Chairs : <strong>Easy Chair</strong></li>
		<br>
			Type of Bed for patients : <strong>Manually Operated</strong></li>
		<br>
			Television : <strong>Not Available</strong></li>
		<br>
			Telephone : <strong>Two Telephones for Three patients</strong></li>
		<br>
			Refrigerator : <strong>Not Available</strong></li>
		<br>
			No. of Passes : <strong>24 Hrs. &ndash; 1 Pass &amp; Visiting Hrs &ndash; 1 Pass</strong></li>
		<br>
			Internet Access : <strong>No</strong></li>
	</ul>
</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Twin Sharing  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
	<a class="fancybox" href="../images/accommodation/twin_sharing.jpg" title="Twin Sharing Rooms"><img src="../images/accommodation/twin_sharing.jpg" /></a></div>
<div class="acd_table">
	<ul class="bullet">
		<br>
			Number of Beds/ Room : <strong>Two patients per room</strong></li>
		<br>
			Toilet &amp; Washroom : <strong>Attached Toilet-cum-Bath</strong></li>
		<br>
			Bed for Attendant : <strong>Available</strong></li>
		<br>
			Sofa Set/ Chairs : <strong>One Chair</strong></li>
		<br>
			Type of Bed for patients : <strong>Manually Operated</strong></li>
		<br>
			Television : <strong>One Television per patient</strong></li>
		<br>
			Telephone : <strong>One Telephone per patient</strong></li>
		<br>
			Refrigerator : <strong>Not Available</strong></li>
		<br>
			No. of Passes : <strong>24 Hrs. &ndash; 1 Pass &amp; Visiting Hrs &ndash; 1 Pass</strong></li>
		<br>
			Internet Access : <strong>No</strong></li>
	</ul>
</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Special  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
	<a class="fancybox" href="../images/accommodation/special.jpg" title="Special Room"><img src="../images/accommodation/special.jpg" /></a></div>
<div class="acd_table">
	<ul class="bullet">
		<br>
			Number of Beds/ Room : <strong>One patients per room</strong></li>
		<br>
			Toilet &amp; Washroom : <strong>Attached Toilet-cum-Bath</strong></li>
		<br>
			Bed for Attendant : <strong>Available</strong></li>
		<br>
			Sofa Set/ Chairs : <strong>One Chair</strong></li>
		<br>
			Type of Bed for patients : <strong>Electrically Operated</strong></li>
		<br>
			Television : <strong>One Television</strong></li>
		<br>
			Telephone : <strong>One Telephone</strong></li>
		<br>
			Refrigerator : <strong>Not Available</strong></li>
		<br>
			No. of Passes : <strong>24 Hrs. &ndash; 1 Pass &amp; Visiting Hrs &ndash; 2 Pass</strong></li>
		<br>
			Internet Access : <strong>No</strong></li>
	</ul>
</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Deluxe  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
	<a class="fancybox" href="../images/accommodation/deluxe.jpg" title="Deluxe Room"><img src="../images/accommodation/deluxe.jpg" /></a></div>
<div class="acd_table">
	<ul class="bullet">
		<li>
			Number of Beds/ Room : <strong>One patients per room</strong></li>
		<br>
			Toilet &amp; Washroom : <strong>Attached Toilet-cum-Bath</strong></li>
		<br>
			Bed for Attendant : <strong>Available</strong></li>
		<br>
			Sofa Set/ Chairs : <strong>Sofa Set and Two Chairs</strong></li>
		<br>
			Type of Bed for patients : <strong>Electrically Operated</strong></li>
		<br>
			Television : <strong>Available</strong></li>
		<br>
			Telephone : <strong>Available</strong></li>
		<br>
			Refrigerator : <strong>Available</strong></li>
		<br>
			No. of Passes : <strong>24 Hrs. &ndash; 1 Pass &amp; Visiting Hrs &ndash; 2 Pass</strong></li>
		<br>
			Internet Access : <strong>No</strong></li>
	</ul>
</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Super Deluxe  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
	<a class="fancybox" href="../images/accommodation/super_deluxe.jpg" title="Super Deluxe Room"><img src="../images/accommodation/super_deluxe.jpg" /></a></div>
<div class="acd_table">
	<ul class="bullet">
		<br>
			Number of Beds/ Room : <strong>One patients per room</strong></li>
		<br>
			Toilet &amp; Washroom : <strong>Attached Toilet-cum-Bath</strong></li>
		<br>
			Bed for Attendant : <strong>Available</strong></li>
		<br>
			Sofa Set/ Chairs : <strong>2 Chairs</strong></li>
		<br>
			Type of Bed for patients : <strong>Electrically Operated</strong></li>
		<br>
			Television : <strong>1 Plasma + 1 VCD player</strong></li>
		<br>
			Telephone : <strong>Available</strong></li>
		<br>
			Refrigerator : <strong>Available</strong></li>
		<br>
			No. of Passes : <strong>24 Hrs. &ndash; 2 Pass &amp; Visiting Hrs &ndash; 3 Pass</strong></li>
		<br>
			Internet Access : <strong>On Request</strong></li>
	</ul>
</div>
                                   <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Executive Suite  </h2>

                                <div class="tab_content">
                                    <div class="acd_img">
                                <a href="../images/accommodation/executive_suite_patient_room.jpg" class="fancybox" data-fancybox-group="gallery" title="Executive Suite - Patient Room">
                                    <img src="../images/accommodation/executive_suite_patient_room.jpg"></a>
                                <a href="../images/accommodation/executive_room_guest_room.jpg" class="fancybox" data-fancybox-group="gallery" title="Executive Suite - Guest Room" style="display: none;"></a>
                            </div>

                            <div class="acd_table">
                                <ul class="bullet">
                                    <br>Number of Beds/ Room : <strong>One patient per room + additional room for visitors</strong> </li>
                                    <br>Toilet & Washroom : <strong>Attached Toilet-cum-Bath</strong> </li>
                                    <br>Bed for Attendant :	<strong>Available</strong> </li>
                                    <br>Sofa Set/ Chairs : <strong>4 Chairs</strong> </li>
                                    <br>Type of Bed for patients : <strong>Electrically Operated</strong></li>
                                    <br>Television : <strong>2 Plasma + 1 VCD player</strong></li>
                                    <br>Telephone : <strong>2 Nos. Available</strong></li>
                                    <br>Refrigerator : <strong>Available</strong></li>
                                    <br>No. of Passes : <strong>24 Hrs. – 2 Pass & Visiting Hrs  – 3 Pass</strong></li>
                                    <br>Internet Access : <strong>On Request</strong></li>
                                </ul>

                            </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
</body>
</html>