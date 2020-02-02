<?php
 
           include_once('connection.php');

          $sql="select * from restaurant";
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
              
              
              Restaurant Details
            </title>
              <body>
           


              <div  style="padding-top: 40px padding-bottom:200px"></div>

                </table >


                <table  align="center" border="1px" style="width: 800px; line-height: 30px;margin-top: 100px">
                  
                 <tr>
                    
                    <th colspan="10"><h2>Restaurant Details</h2></th>

                   </tr >
                    <t style="text-align: center;">  
                    <th>Rid</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>Openinng time</th>
                    <th>Closing time</th>
                </t>

                <?php

                while($rows=mysqli_fetch_assoc($result))
                {
                  ?>
                  <tr style="text-align: center;">

                    <td><?php echo $rows['rid']?></td>
                    <td><?php echo $rows['rname']?></td>
                   
                    <td><?php echo $rows['address']?></td>
                    <td><?php echo $rows['rno']?></td>
                    <td><?php echo $rows['typ']?></td>
                    <td><?php echo $rows['otime']?></td>
                    <td><?php echo $rows['ctime']?></td>
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