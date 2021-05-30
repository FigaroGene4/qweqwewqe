<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if(empty($_POST['lname'])){
        $lname_error = "Please Enter your Last Name!";
    }
    if(empty($_POST['fname'])){
        $fname_error = "Please Enter your First Name!";
    }
    if(empty($_POST['email'])){
        $email_error = "Please Enter your Email!";
    }
    if(empty($_POST['phoneno'])){
        $phoneno_error = "Please Enter your Phone Number!";
    }
    if(empty($_POST['address'])){
        $address_error = "Please Enter your Address!";
    }
    if(empty($_POST['password'])){
        $password_error = "Please Enter your Password!";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>MOBILE BARBERO | REGISTRATION</title>

    <Style>



        body{
            background: #A9A9A9;
        }
        .col {

                margin: auto;
                width: 60%;
                padding: 10px, 10px, 10px, 10px;
                margin-top: 90px;
                background: #ffffff;

        }

        table{
            margin: auto;
            
        }


        h1{
            margin: auto;
            margin-top: 30px;
        }


        .regbtn{
            background-color: 	#FFA500;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 60%;
            opacity: 0.9;
            

        }

        input[type=lname], input[type=fname], input[type=password], input[type=email], input[type=num],input[type=address] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        .container {
            padding: 16px;
            background-color: white;
        }


       
    
    
    </Style>
  </head>
  <body>
    
    

   
    <div class="col container ">



        <form action="registration_success.php" method="POST">

        <div class="text-center"><h1>REGISTRATION</h1></div>

        
            <br>
            <br>
            <table >

            <tr>
            <td><b>Last Name:</b></td>
            <td><input type="lname" name="lname" placeholder="Last Name" size="20"></td>
            <span><?php if(isset($lname_error))echo $lname_error;?></span>
            </tr>

        

            <tr>
            <td><b>First Name:</b></td>
            <td><input type="fname" name="fname" placeholder="First Name" size="50"></td>
            <span><?php if(isset($fname_error))echo $fname_error;?></span>
            </tr>

            

            <tr>
            <td><b>Email:</b></td>
            <td><input type="email" name="email" placeholder="Email" size="50"></td>
            <span><?php if(isset($lname_error))echo $lname_error;?></span>
            </tr>


            <tr>
            <td><b>Phone No.:</b></td>
            <td><input type="num" name="phoneno" placeholder="Phone No." maxlength="11" size="50"></td>
            <span><?php if(isset($phoneno_error))echo $phoneno_error;?></span>
            </tr>



            <tr>
            <td><b>Address:</b></td>
            <td><input type="address" name="address" placeholder="Address" maxlength="50"size="50"></td>
            <span><?php if(isset($address_error))echo $address_error;?></span>
            </tr>

            <tr>
            <td><b>Password:</b></td>
            <td><input type="password" name="password" placeholder="Password" size="50"></td>
            <span><?php if(isset($address_error))echo $address_error;?></span>
            </tr>

            
            
            </table>

            <div class="text-center"><button type="submit" class="regbtn">REGISTER!</button></div>
            
        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>