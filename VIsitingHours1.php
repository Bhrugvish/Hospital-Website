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
      h1{color: #04869a}
      p{font-size: 20px}
      
      table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#04869a;
    color: white;
}
      
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
    color:;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align:left;
    background-color: #333;
    
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


<div class="inner_page_container">

        <div class="green_banner">
            <div class="page_title">Visiting Hours</div>
        </div>
        <div class="clear"></div>

        <div class="container">

            <div class="content_main_box text_format">

                
                <div class='inner_banner'><img src="img/img10.jpg" ></div>

                <div class="print_share">
                    <a onclick="window.print();return false" title="Print" class="print"><i class="fa fa-print"></i></a>
                    <div class="addthis_native_toolbox"></div>
                    <div class="clear"></div>
                </div>


                <table>
	<thead>
		<tr>
			<th>
				Section</th>
			<th>
				Monday to Saturday</th>
			<th>
				Sunday</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				ICU</td>
			<td>
				5 PM to 7 PM</td>
			<td>
				10 AM to 11 AM / 5 PM to 7 PM</td>
		</tr>
		<tr>
			<td>
				Ward</td>
			<td>
				4 PM to 7 PM</td>
			<td>
				10 AM to 11 AM / 4 PM to 7 PM</td>
		</tr>
	</tbody>
</table>
<p>
	<strong>Children below the age of 10 years are not allowed as visitors.</strong></p>

                

                <div class="clear"></div>
            </div>


</body>
</html>