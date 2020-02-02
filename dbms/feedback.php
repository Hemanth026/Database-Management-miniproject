<?php
 
           include_once('connection.php');

          $sql="select * from feedback";
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
              
              Feedback Details
            </title>
              <body>
           


              <div  style="padding-top: 40px"></div>

                </table >


                <table  align="center" border="1px" style="width: 800px; line-height: 30px;margin-top: 100px">
                  
            <t>  
                <tr>
                    
                    <th colspan="10"><h2>Feedback Details</h2></th>

                    </tr>
                    <t style="text-align: center;">  
                    <th>Fid</th>
                    <th>Uid</th>
                   
                    <th>Rid</th>
                    <th>Ratings</th>
                    
                </t>

                <?php

                while($rows=mysqli_fetch_assoc($result))
                {
                  ?>
                  <tr style="text-align: center;">

                    <td><?php echo $rows['fid']?></td>
                    <td><?php echo $rows['uid']?></td>
                   
                    <td><?php echo $rows['rid']?></td>
                    <td><?php echo $rows['ratings']?></td>
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