<?php
session_start();
?>
<!Doctype>
<html>
 <head>
     <title>Home Page</title>
    <style type="text/css">
     
        .form{
            width: 300px;
            height: 200px;
            background-color: aqua;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
     </style>
 </head>
    <body>
        <div class="form">
     <form name="homepg" method="post">
         WELCOME TO HOME PAGE<?
          
         
         php echo $_SESSION['Fname']?><BR>
         Press here to LOG OUT:-<br>
        <input type="submit" name="logout" value="Log Out">
        
     </form>
            </div>
            <?php
             if(isset($_POST['logout']))
             {
                 session_destroy();
                 header('location:SignIn.php');
             }
            
            ?>
    
    </body>
</html>