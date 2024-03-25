<?php 
session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"DELETE FROM users WHERE id='$adminid'");
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
                <!-- Modal -->
                    <div class="modal fade" id="AboutUsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="code.php" method="POST">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label >Address</label>
                                            <input type="text" name="address" class="form-control" placeholder="Enter Address">
                                            <label >Phone</label>
                                            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone No." pattern="[789][0-9]{9}">
                                            <label >Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="abtcontact_save" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Shop Contact Information</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Shop Contact</li>
                        </ol>
                        
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Shop Contact  &nbsp 
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AboutUsModal">
                                    ADD
                                </button>
                                </h6>
                            </div>

                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Shop Contact!!!
                                </div>
                                <div class="card-body">

                                <?php
                                    if(isset($_SESSION['success']) && $_SESSION['success'] !='')
                                    {
                                        echo' <h2> '.$_SESSION['success'].' </h2>';
                                        unset($_SESSION['success']);
                                    }

                                    if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                                    {
                                        echo' <h2> '.$_SESSION['status'].' </h2>';
                                        unset($_SESSION['status']);
                                    }
                                ?>
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>Sno.</th>
                                                    <th>Address</th>
                                                    <th>Phone No.</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <?php
                                                $server = "wecare.mysql.database.azure.com";
                                                $user = "azure";
                                                $password = "Pranay@302002";
                                                $database = "contact_data";
                                                $ssl_mode = MYSQLI_CLIENT_SSL;

                                                $conn = mysqli_init();
                                                mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
                                                mysqli_real_connect($conn, $server, $user, $password, $database, 3306, NULL, $ssl_mode);

                                                $ret = mysqli_query($conn, "SELECT * FROM shop_info");

                                                while ($row = mysqli_fetch_array($ret)) {
                                                    // Your code logic here
                                                }
                                                ?>

                                            <tr>
                                            
                                                <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['address'];?></td>
                                                <td><?php echo $row['phone'];?></td>
                                                <td><?php echo $row['email'];?></td> 
                                                <td>
                                                    <form action="shopcontact_edit.php" method="POST">
                                                        <input type="hidden"  name="editshop_id" value="<?php echo $row['id'];?>">
                                                        <button type="submit" class="btn " name="editshop_btn"><i class="fas fa-edit"></i></button>
                                                    </form>

                                                    <form action="code.php" method="POST">   
                                                        <input type="hidden"  name="deleteshop_id" value="<?php echo $row['id'];?>">
                                                        <button type="submit" class="btn " name="deleteshop_btn"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php  
                                            }
                                            ?>
                                        </tbody>
                                </table>
                                </div>
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