<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
   ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About us | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
         <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary"> Edit About Us </h6>
                            </div>

                            <div class="card-body">
                            <?php

                            $conn = mysqli_connect("localhost","root","","contact_data");

                            if(isset($_POST['edit_btn']))
                            {
                                $id = $_POST['edit_id'];
                                // echo $id;

                                
                                $query = "SELECT * FROM aboutus WHERE id='$id'";
                                $query_run = mysqli_query($conn, $query);

                                foreach($query_run as $row)
                                {
                                    ?>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                                            <div class = "form-group">
                                                <label >Title</label>
                                                <input type="text" name="edit_title" value="<?php echo $row['title'];?>" class="form-control" placeholder="Enter Title">
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <a href="Aboutus.php" class="btn btn-danger">CANCEL</a>
                                                <button type="submit" name="updatebtn" class="btn btn-primary">Update changes</button>
                                            </div>
                                        </form>
                                    <?php
                                }
                            }
                            ?>
                            
                            </div>
                    </div> 
                </main>
                <?php include('../includes/footer.php');?>
            </div>
        </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>