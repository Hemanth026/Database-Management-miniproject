<?php
 
            session_start();

         
            $servername = 'localhost';
            $username = 'hemanth';
            $password = 'hemanth';
          
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
           /* $conn = mysqli_connect('localhost', 'hemanth','hemanth');*/

            if(!$conn){
               echo 'not cinnected to the server'; 
            }
           if(mysqli_select_db($conn,'test')){
            echo 'connected to the database';
           }
           else{
            echo 'not connected';
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
            if(mysqli_query($conn, $sql)){
               echo 'record inserted succesfully';
            }

            else{
                echo("Error description:1 " .mysqli_error($conn) );
            }
         

            /*get userid*/
            $uid=$conn->insert_id;

                $sql2="INSERT INTO website(uid,rid,foodi_tems,price) VALUES($uid,$rid,'$food',$price)";

            if(mysqli_query($conn, $sql2)){
               echo 'record2 inserted succesfully';
            }

            else{
                echo("Error description: 2" .mysqli_error($conn) );
            }
            $sid=$conn->insert_id;


            $sql3="INSERT INTO payment(uid,sid) VALUES($uid,$sid)";

            if(mysqli_query($conn, $sql3)){
               echo 'record 3 inserted succesfully';
            }

            else{
                echo("Error description: 3" .mysqli_error($conn) );
            }

            $pid=$conn->insert_id;
            $did=rand(1,10);

            $sql4="INSERT INTO orders(pid,did) VALUES($pid,$did)";

            if(mysqli_query($conn, $sql4)){
               echo 'record 4 inserted succesfully';
            }

            else{
                echo("Error description: 4" .mysqli_error($conn) );
            }

           
          $sql5="INSERT INTO destination (uid,dest_customer,dest_address,dest_phone,did) VALUES($uid,'$name','$dest','$phone',$did)";

            if(mysqli_query($conn, $sql5)){
               echo 'record 5 inserted succesfully';
            }

            else{
                echo("Error description: 5" .mysqli_error($conn) );
            }

             $sql6="INSERT INTO feedback(uid,rid,ratings) VALUES($uid,$rid,$ratings)";

            if(mysqli_query($conn, $sql6)){
               echo 'record 6 inserted succesfully';
            }

            else{
                echo("Error description: 6" .mysqli_error($conn) );
            }
            

/*
            $name='arya';
            $age=23;
            $email='arya@gmail.com';
            $phone=433443;
            $address='33/3,Sai nagar,Mysuru';
            $rid=901;
            $food='meals';
            $dest='33/3,Sai nagar,Mysuru';
            $price=250;
            /*$sql = "INSERT INTO users(uid,uname,age,email,phone,address)VALUES (3,'$name',$age,'$email',$phone,'$address')";
            if(mysqli_query($conn, $sql)){
               echo 'record inserted succesfully';
            }

            else{
                echo("Error description:1 " .mysqli_error($conn) );
            }*/



          
            $conn->close();

          
      
?>