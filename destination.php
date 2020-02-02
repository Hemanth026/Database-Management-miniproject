<?php
 
           include_once('connection.php');

          $sql="select * from destination";
          $result=mysqli_query($conn,$sql);
           ?>

            <!DOCTYPE html>
            <html>
            <style type="text/css">
              body{
                background: url('back3.jpg ');
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
              }



            </style>
           

          

            <title>
              
              Destination Details
            </title>
              <body>
           


              <div  style="padding-top: 40px padding-bottom:200px"></div>

                </table >


                <table  align="center" border="1px" style="width: 800px; line-height: 30px;margin-top: 100px">
                  
                 <tr>
                    
                    <th colspan="10"><h2>Destination Details</h2></th>
                </tr>
                    <t style="text-align: center;">  
                    <th>Dest_id</th>
                    <th>Uid</th>
                   
                    <th>Name</th>
                    <th>Address</th>
                     <th>Phone</th>
                      <th>did</th>
               
                </t>

                <?php

                while($rows=mysqli_fetch_assoc($result))
                {
                  ?>
                  <tr style="text-align: center;">

                    <td><?php echo $rows['dest_id']?></td>
                    <td><?php echo $rows['uid']?></td>
                   
                    <td><?php echo $rows['dest_customer']?></td>
                    <td><?php echo $rows['dest_address']?></td>
                    <td><?php echo $rows['dest_phone']?></td>
                    <td><?php echo $rows['did']?></td>
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