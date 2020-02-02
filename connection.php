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
            
           }
           else{
            echo 'not connected';
           }

?> 