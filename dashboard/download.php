<?php



$active = "download";



include 'inc/header.php'

?>



<div class="col-10 main-section bg-white border p-2">

    <h5 class="css">Manage Files</h5>



    <!-- main header content  -->

    <div class="dn-form-container">

        <div class="d-flex justify-content-between top">

            <h3>Add File</h3>



            <?php

            if (isset($_GET['id'])) { ?>

                <button type="submit" form="class-form" class="btn btn-primary" name="edit">Update</button>

            <?php } else { ?>

                <button type="submit" form="class-form" name="save" class="btn btn-primary">Save</button>

            <?php } ?>



        </div>





        <!-- handle form request for classes -->

        <?php

        /* find by id and update */


        $text = '';
        $file = '';



        if (isset($_GET['id'])) {

            $find_id = $_GET['id'];



            $query = mysqli_query($conn, "select * from download  where id = $find_id");



            if ($query) {

                $find_result = mysqli_fetch_array($query);

                $text = $find_result['text'];
            }
        }





        if (isset($_GET['delete'])) {

            $find_id = $_GET['delete'];



            $query = mysqli_query($conn, "delete from download where id = $find_id");



            if ($query) {

                set_ss("download  deleted with id = $find_id successfuly", $_SERVER['PHP_SELF']);
            } else {

                set_ss("download  delete with id = $find_id failed", $_SERVER['PHP_SELF'], 'error');
            }
        }







        /* post or update content on request */

        if (isset($_POST['save'])) {



            $text = htmlspecialchars($_POST['text']);

            if (isset($_FILES['file'])) {
                $path = upload_file($_FILES['file'], 1);
            }

            $file  = $path;


            /* post if id null (content not available in DB) */

            $query = "insert into download (text,file) values ('$text','$file')";

            $query = mysqli_query($conn, $query);


            if ($query) {

                set_ss('download  inserted successfully', $_SERVER['PHP_SELF']);
            } else {

                set_ss('download  failed to insert' . mysqli_error($conn), $_SERVER['PHP_SELF'], 'error');
            }
        }



        /* update if id not null (content available in DB) */

        if (isset($_POST['edit'])) {



            $id = $_GET['id'];

            $text = $_POST['text'];

            $query = "UPDATE download SET text='$text' WHERE id = $id";

            if (isset($_FILES['file'])) {
                $path = upload_file($_FILES['file'], 1);

                $query = "UPDATE download SET text='$text' , file='$path' WHERE id = $id";
            }

            $query = mysqli_query($conn, $query);

            if ($query) {

                set_ss('download  updated successfully', $_SERVER['PHP_SELF']);
            } else {

                set_ss('download  failed to update' . $id . mysqli_error($conn), $_SERVER['PHP_SELF'], 'error');
            }
        }





        ?>

        <!-- handle form request for main form content -->

        <form action="<?php $_SERVER['PHP_SELF']; ?>

      <?php isset($_GET['id']) ? '?id=' . $_GET['id'] : ''; ?>" method="POST" id="class-form" enctype="multipart/form-data">

            <div class="mb-3">

                <label for="text" class="form-label">File Label</label>

                <!-- <textarea style="min-height: 500px;" name="text" id="text" placeholder="content here..."><?php echo $text; ?></textarea> -->

                <input type="text" name="text" id="text" placeholder="File Label" value="<?php echo $text; ?>" required class="form-control">
            </div>

            <div class="mb-3">

                <label for="file" class="form-label">File</label>

                <!-- <textarea style="min-height: 500px;" name="text" id="text" placeholder="content here..."><?php echo $text; ?></textarea> -->

                <input type="file" name="file" id="file" placeholder="File Label" value="<?php echo $file; ?>" required class="form-control">
            </div>

        </form>



    </div>



    <!-- classes list  -->

    <div class="dn-form-container">

        <div class="d-flex justify-content-between top">

            <h3>Files</h3>

        </div>



        <table class="table">

            <tr>

                <th>ID</th>
                <th>Text</th>
                <th>File</th>
                <th>Actions</th>

            </tr>

            <?php

            /* check if values0 exist */

            $values0 = mysqli_query($conn, "select * from download ");

            while ($item = mysqli_fetch_array($values0)) {

            ?>

                <tr>

                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['text']; ?></td>
                    <td><?php echo $item['file']; ?></td>


                    <td>

                        <a href="<?php $_SERVER['PHP_SELF']; ?>?id=<?php echo $item['id']; ?>" class="btn-sm text-success"><i class="fas fa-edit"></i></a>

                        <a href="<?php $_SERVER['PHP_SELF']; ?>?delete=<?php echo $item['id']; ?>" class="btn-sm text-danger"><i class="fas fa-trash"></i></a>

                    </td>

                </tr>

            <?php }

            ?>

        </table>

    </div>





    <?php include 'inc/footer.php' ?>