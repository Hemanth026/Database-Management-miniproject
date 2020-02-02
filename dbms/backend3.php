<?php
 
           session_start();

         
            $servername = 'localhost';
            $username = 'hemanth';
            $password = 'hemanth';
          
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
           /* $conn = mysqli_connect('localhost', 'hemanth','hemanth');*/

            if(!$conn){
                //echo 'not cinnected to the server'; 
            }
           if(mysqli_select_db($conn,'test')){
            //echo 'connected to the database';
           }
           else{
           // echo 'not connected';
           }
           
            $name=$_POST['name'];
            $age=$_POST['age'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $rid=$_POST['rid'];
            $food=$_POST['food'];
            $dest=$_POST['dest'];
            $price=$_POST['price'];
            $ratings=$_POST['ratings'];
          

            $sql = "INSERT INTO users(uname,age,email,phone,address)VALUES ('$name',$age,'$email',$phone,'$address')";
            mysqli_query($conn, $sql);
             //  echo 'record inserted succesfully';
            

                        $uid=$conn->insert_id;

                $sql2="INSERT INTO website(uid,rid,foodi_tems,price) VALUES($uid,$rid,'$food',$price)";

            mysqli_query($conn, $sql2);
             
           
            $sid=$conn->insert_id;


            $sql3="INSERT INTO payment(uid,sid) VALUES($uid,$sid)";

            mysqli_query($conn, $sql3);
              

            

            $pid=$conn->insert_id;
            $did=rand(1,10);

            $sql4="INSERT INTO orders(pid,did) VALUES($pid,$did)";

            mysqli_query($conn, $sql4);
           
           
          $sql5="INSERT INTO destination (uid,dest_customer,dest_address,dest_phone,did) VALUES($uid,'$name','$dest','$phone',$did)";

            mysqli_query($conn, $sql5);
             

             $sql6="INSERT INTO feedback(uid,rid,ratings) VALUES($uid,$rid,$ratings)";

            mysqli_query($conn, $sql6);
               
            
            




          
            $conn->close();

          
      
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="regform.css">
    <title>Foodie-booking</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

   <a class="navbar-brand" href="#">
    <img src="logo2.png" width="100" height="30" alt="">
  </a>
  <a class="navbar-brand" href="#">FOODIE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" >
      <li class="nav-item active" >
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Contact us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<h3 style="padding-top: 190px;padding-left: 350px;"> Your order is placed sucessfully!!</h3>