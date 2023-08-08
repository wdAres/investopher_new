<?php



ob_start();

include 'connection.php';

include 'redirect_if_not.php';



/* set session and reload page */

function set_ss($value, $url, $type = 'success')

{

   $_SESSION[$type] = $value;

   header("Location: $url");

}



function upload_file($file, $conn, $int = 0)

{

   $target_dir = "uploads/";

   $target_file = $target_dir . date('Y-F-d-h-i-s') . $int . basename($file["name"]);

   $success = move_uploaded_file($file["tmp_name"], $target_file);

   if (!$success) {

      return false;

   }

   return $target_file;

}







ob_end_flush();

?>



<!DOCTYPE html>

<html lang="en">



<head>

   <meta charset="UTF-8" />

   <meta http-equiv="X-UA-Compatible" content="IE=edge" />

   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>Dashboard</title>



   <!-- cdn links -->

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />





   <!-- font awesome  -->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />





   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- font awesome  -->



   <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>



   <link rel="stylesheet" href="style.css" />

</head>



<body>



<style>

   h3.sidebar_headings:nth-child(1){

      margin-top: 10px;

   }

   h3.sidebar_headings {

    border-bottom: 2px solid #e3e3e3;

    font-size: 15px;

    margin-top: 30px;

}

</style>



   <div class="main container-fluid bg-light">

      <header>

         <nav class="navbar navbar-expand-lg navbar-light">

            <div class="container-fluid">

               <a class="navbar-brand fw-bold" href="index.php">Dashboard</a>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                     <li class="nav-item">

                        <a class="nav-link active btn btn-primary text-white fw-bold" aria-current="page" href="logout.php"><i class="fas fa-cog pe-2"></i> Logout</a>

                     </li>

                  </ul>

               </div>

            </div>

         </nav>

      </header>

      <div class="content">

         <div class="row py-2">

            <!-- sidebar  -->

            <div class="col-12">

               <?php

               if (isset($_SESSION['error'])) { ?>

                  <div class="alert alert-danger">

                     <?php

                     $err = $_SESSION['error'] ? $_SESSION['error'] : '';

                     echo $err;

                     unset($_SESSION['error']);

                     ?>

                  </div>

               <?php }

               ?>

               <?php

               if (isset($_SESSION['success'])) { ?>

                  <div class="alert alert-success">

                     <?php

                     $err = $_SESSION['success'] ? $_SESSION['success'] : '';

                     echo $err;

                     unset($_SESSION['success']);

                     ?>

                  </div>

               <?php }

               ?>

            </div>

            <div class="col-2" style="min-height: calc(100vh - 65px)">

               <ul class="list-unstyled text-dark bg-white p-2 sidebar-custom">

                  <h3 class="sidebar_headings">

                     Contact Page 

                  </h3>

                  <li class="<?php echo $active == 'contact' ? 'active' : ''; ?>">

                     <a href="contact.php"><i class="fas fa-address-book"></i>Contact Form</a>

                  </li>                 

               </ul>

            </div>