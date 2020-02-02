<?php
 
            session_start();

         
            $servername = 'localhost';
            $username = 'hemanth';
            $password = 'hemanth';
          
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
            $conn = mysqli_connect('localhost', 'hemanth','hemanth');

           mysqli_select_db($conn,'test');
            
       

           $uid=$_POST['id'];

           //$uid=1017
          $sql="select sid from website where uid='$uid'";
           $res=mysqli_query($conn, $sql);

           

            $rows=mysqli_fetch_assoc($res);
            $sid=$rows['sid'];
            

              $sql="select pid from payment where sid='$sid'";
           $res=mysqli_query($conn, $sql);


            $rows=mysqli_fetch_assoc($res);
            $pid=$rows['pid'];
           

             $sql="select oid from orders where pid='$pid'";
           $res=mysqli_query($conn, $sql);

           

            $rows=mysqli_fetch_assoc($res);
            $oid=$rows['oid'];
            

            $sql="delete  from orders where oid='$oid'";
           $res=mysqli_query($conn, $sql);

           
              $sql="delete  from payment where pid=$pid";
           $res=mysqli_query($conn, $sql);

              $sql="delete  from destination where uid=$uid";
           $res=mysqli_query($conn, $sql);

           
              $sql="delete  from website where sid=$sid";
           $res=mysqli_query($conn, $sql);

          
              $sql="delete  from feedback where uid=$uid";
           $res=mysqli_query($conn, $sql);

           

               $sql="delete  from users where uid=$uid";
           $res=mysqli_query($conn, $sql);

          
           
           
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
      


      body{

  background : url('back3.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;

}



    </style>
    <title>Delete</title>
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


<h3 style="padding-top: 200px;padding-left: 400px; "> Record deleted successfully</h3>

</body>
</html>