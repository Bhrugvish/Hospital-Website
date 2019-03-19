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
    h2{color:chocolate}
    
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

    .bullet{background-color: white}
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
            <div class="page_title">Inpatients</div>
        </div>
        <div class="clear"></div>

        <div class="container">

            <div class="content_main_box text_format">

                
                <div class='inner_banner'><img src='/uploads/home_banner/InnerBanner-3314-3967-2057.jpg'></div>

                <div class="print_share">
                    <a onclick="window.print();return false" title="Print" class="print"><i class="fa fa-print"></i></a>
                    <div class="addthis_native_toolbox"></div>
                    <div class="clear"></div>
                </div>


                <div class="tabber">

                    
                            <div class="tabbertab">
                                <h2>Admission  </h2>

                                <div class="tab_content">
                                    <p>
 <strong class="green_text uppercase">Before Admission</strong></p>
<ul class="bullet">
 <br>
  Kindly contact the admission counter and provide them with the details e.g. Date of Admission, Treating doctor, and Preference class of accommodation.</li>
 <br>
  Planned Surgical/Maternity cases are required to pay deposit amount.</li>
 <br>
  On the date of admission an intimation call will be made and in case it is not received you are requested to confirm with the admission counter.</li>
 <br>
  Accommodation of your choice may not be available in such case all efforts will be made to facilitate you in another best available category.</li>
 <br>
  We accept cash/DD or debit cards/ Credit cards of all major banks / Union Bank cheque accepted during banking hour&#39;s.</li>
 <br>
  Reservation deposits are not transferable.</li>
</ul>
<p>
 <strong class="green_text uppercase">During Admission</strong></p>
<ul class="bullet">
 <br>
  Patients are admitted either through doctor&rsquo;s reference letter or CMO&rsquo;s recommendation.</li>
 <br>
  Passport &amp;Visa/PIO is to be produced by foreign nationals/NRI failing which the admission of the patients may be denied.</li>
 <br>
  The deposit amount has to be paid according to the rules, within 24 hrs in case of emergency. The amount will vary based on the type of accommodation.</li>
</ul>
<p>
 <strong class="green_text uppercase">After Admission</strong></p>
<ul class="bullet">
 <br>
  The charge of the bed is billed at the end of each day. Check in time is flexible. Charges will be applicable.</li>
 <br>
  Day care Patient will be kept under observation for a maximum of 8 hrs, after which he will either be admitted as regular patient or discharged.</li>
 <br>
  Transfers of the class will be based on the availability only.</li>
 <br>
  When you move upgrade to a higher class the billing will be done as per the higher class from day one.</li>
 <br>
  In case of down grade to a lower class the billing from the day of transfer will be applicable as per the lower class subject to the approval of the management.</li>
 <br>
  In case shifting to ICU the room has to be vacated.</li>
 <br>
  Special/Deluxe/Super deluxe/Executive Suit class may be allowed to retain the room subject to availability (Charges for the same would be double).</li>
 <br>
  The cut off time for transfer is 11 am. For each calendar day the highest room charge applicable between 11 am to 12 midnight will be billed after considering transfers, if any.</li>
</ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Billing And Payments  </h2>

                                <div class="tab_content">
                                    <ul class="bullet">
	<br>
		The billing department functions on all week days round the clock</li>
	<br>
		Charges of investigations, operation theatres &amp; doctor fees will vary according to the room category</li>
	<br>
		Bed charges are inclusive of diet and nursing services. Additional food beverages / mineral water for the patients or visitors will be charged extra</li>
	<br>
		Statement of account (SOA) is generated and distributed every Monday, Wednesday and Friday. SOA will list the charges accrued to the patient along with a request to settle the same. SOA is not generated for package surgeries (viz, Angiography, Angioplasty, Bypass and Cataract)</li>
	<br>
		Emergency charge @ 2 times the routine rate will be applicable for any test / procedure done on Sundays / public holidays / after working hours of respective departments / on an emergency basis</li>
	<br>
		OT Emergency charge @ 1.5 times the routine rate will be applicable for any procedure done on Sundays / public holidays / after OT working hours on an emergency basis</li>
	<br>
		Emergency visit charges are applicable between 11:00 pm to 06:00 am when the doctor is specially called to see the patient</li>
	<br>
		Intensivist visit will be charged on a per day basis during the period of stay in ICUs</li>
	<br>
		If more than one surgery is performed during the same session i.e. within a single theatre slot then the patient is charged as per multiple surgeries (please refer surgical tariff for further details)</li>
	<br>
		Cardiac packages are only for the patients admitted in Common, Economy and Twin Sharing class. Up gradation or down gradation of the class within package is not permissible i.e. for Angiography, Angioplasty, Bypass.</li>
	<br>
		There is a surcharge of 20% levied on the final bill amount of all foreign nationals/ NRI patients</li>
	<br>
		You can redress your billing queries on 022-26751594 (timings 9 am to 5 pm for admitted patients and 2 pm to 5 pm for discharged patients</li>
	<br>
		No billing queries will be entertained after 30 days from date of discharge</li>
</ul>
<p>
	<strong class="green_text">Following are the details for transferring funds through RTGS/ NEFT </strong></p>
<ul class="bullet">
	<br>
		Account of - <strong>ST. VINCENT's Hospital and Research Centre</strong></li>
	<br>
		Current A/C No. - <strong>315601011022008</strong></li>
	<br>
		IFSC Code - <strong>UBIN0531561</strong></li>
	<brbr>
		Bank Code - <strong>026</strong></li>
	<br>
		MICR Code - <strong>400026012</strong></li>
	<br>
		Branch Code - <strong>531561</strong></li>
	<br>
		Name of Bank - <strong>UNION BANK OF INDIA</strong></li>
	<br>
		Branch - <strong>BANDRA - HILL ROAD</strong></li>
	<br>
		PAN No. - <strong>AAATL1398Q</strong></li>
</ul>
<p>
	<strong class="green_text">Note</strong></p>
<p>
	Once your transaction is completed you are requested to mail us on <a href="mailto:billing@stvincenthospital.com">billing@stvincenthospital.com</a> with your mobile number and following details:</p>
<ul class="bullet">
	<br>
		Name of patient, date of Admission, date of Surgery, preference class of admission and name of admitting doctor.</li>
	<br>
		Account holder details (name of bank &amp; branch, a/c holder name), transaction date, time, amount &amp; UTR No, Admission number (if admitted).You can also contact our In-patient billing department for confirmation of payment between 8:00am to 5:00 pm. Tel No : 022 267571592, 022 26751594.For payment confirmation kindly provide UTR number (transfer no).</li>
</ul>
<p>
	&nbsp;</p>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>Discharge  </h2>

                                <div class="tab_content">
                                    <ul class="bullet">
 <br>
  Discharges are processed round the clock in the hospital.</li>
 <br>
  Discharge time is 8 am and the final bill has to be cleared before 9 am. If your discharge order is received for final billing beyond 8 am you will be charged for that day.</li>
 <br>
  Discharge of patient will be authorized as per the doctor&#39;s opinion.</li>
 <br>
  On receipt of request and discharge papers the billing department prepares the bill. On Completion of the final bill the billing department informs the patient Room for final settlement.</li>
 <br>
  Relative has to approach the discharge counter for final settlement.</li>
 <br>
  Passes are to be submitted at the discharge counter without which the Discharge slip will not be issued. Non-refundable fee of Rs.500 per pass&nbsp;will be Charged if the pass is misplaced / damaged or not surrendered before Discharge</li>
</ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        
                            <div class="tabbertab">
                                <h2>General Instructions  </h2>

                                <div class="tab_content">
                                    <ul class="bullet">
 <br>
  Outside food is not allowed inside hospital for patients / patient&rsquo;s attendants. The hospital serves well-balanced vegetarian meals.</li>
 <br>
  Smoking, consumption of alcohol and non-vegetarian food is not permitted in the hospital premises</li>
 <br>
  Mobile phones are not permitted in restricted areas of the hospital viz, ICU, Operation Theatres, MRI, Maternity Ward.</li>
 <br>
  Photography is prohibited in hospital premises</li>
 <br>
  All medicines, consumables etc for the patient will be provided by the hospital, no outside medicine or consumables are permitted to be brought</li>
 <br>
  Patients are advised not to carry cash or wear or keep any jewellery during their hospitalization. The hospital is not responsible for any kind of loss.</li>
 <br>
  The hospital security has the right to check your baggage and ask for passes at any time.</li>
 <br>
  The admission counter / ward nurse will issue a feedback form. Please spend some time to let us know how we can serve you better.</li>
 <br>
  Reports can be collected from the ground floor central dispatch department which functions from 8am to 9pm all days except Sunday &amp; Public Holidays</li>
</ul>
                                    <div class="clear"></div>
                                </div>
                           </div>
                        

                    

                    <!-- xxxxxxxxxxxxxxxxxx -->

                    <div class="clear"></div>
                </div>


                <div class="clear"></div>
            </div>


            
</body>
</html>