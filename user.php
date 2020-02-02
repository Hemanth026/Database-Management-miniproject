<?php
 
           include_once('connection.php');
           $table="users";
          $sql="select * from $table";
          $result=mysqli_query($conn,$sql);
           ?>

            <!DOCTYPE html>
            <html>
            <style type="text/css">
              body{
                background: url('back3.jpg');
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
              }



            </style>
           

          

            <title>
              
             User details
            </title>
              <body>

            
                <table align="center" border="1px" style="width: 800px; line-height: 30px; margin-top: 100px;">
                  
                  <tr>
                    
                    <th colspan="10"><h2>User Details</h2></th>

                    </tr>
                    <t style="text-align: center;">  
                    <th>Uid</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                </t>

                <?php

                while($rows=mysqli_fetch_assoc($result))
                {
                  ?>
                  <tr style="text-align: center;">

                    <td><?php echo $rows['uid']?></td>
                    <td><?php echo $rows['uname']?></td>
                    <td><?php echo $rows['age']?></td>
                    <td><?php echo $rows['email']?></td>
                    <td><?php echo $rows['phone']?></td>
                    <td><?php echo $rows['address']?></td>
               
                    </tr>
                  <?php 
                  }

                  ?>  

                </table>


                <div style="margin-left: 900px;margin-bottom: 100px;margin-top: 30px;padding: 20px 20px;">

<button type="button" class="btn btn-danger btn-lg"><a href="index.html">Home</a></button>


</div>
                </body>
                </html>


