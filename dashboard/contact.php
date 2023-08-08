<?php



$active = "contact";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

   <h5 class="css">Contact Form</h5>



   <!-- classes list  -->

   <div class="dn-form-container">

      <div class="d-flex justify-content-between top">

         <h3>Contact Form</h3>

         <div>
            <a href="excel_export_all.php" class="btn btn-dark"><i class="fas fa-file-excel text-white"></i></a>
         </div>
      </div>



      <table class="table">
         <tr>
            <th>ID</th>

            <th>Name</th>

            <th>Email</th>
            <th>Phone</th>

            <th>Selected Option</th>
            <th>Export</th>


         </tr>

         <?php

         /* check if data exist */

         $select = mysqli_query($conn, "select * from contact ORDER BY id DESC ");

         $inc = 0;

         while ($item = mysqli_fetch_array($select)) {

            $inc++ ?>

            <tr>

               <td><?php echo $inc; ?></td>

               <td class="text-nowrap"><?php echo $item['name']; ?></td>

               <td class="text-nowrap"><?php echo $item['email']; ?></td>
               <td class="text-nowrap"><?php echo $item['phone']; ?></td>

               <td class="text-nowrap"><?php echo $item['options']; ?></td>

               <td class="text-nowrap">
                  <a href="excel_export_id.php?id=<?php echo $item["id"]; ?>" class="btn btn-dark"><i class="fas fa-file-excel text-white"></i></a>
               </td>
            </tr>

         <?php }
         ?>

      </table>

   </div>







   <?php include 'inc/footer.php' ?>