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
        <title>Sugestions | Registration and Login System</title>
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
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Sugestions</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Sugestions</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Sugestions are!!!
                            </div>
                            <div class="card-body">
                            <?php
                                if(isset($_SESSION['success']) && $_SESSION['success'] !='') {
                                    echo '<h2>'.$_SESSION['success'].'</h2>';
                                    unset($_SESSION['success']);
                                }

                                if(isset($_SESSION['status']) && $_SESSION['status'] !='') {
                                    echo '<h2>'.$_SESSION['status'].'</h2>';
                                    unset($_SESSION['status']);
                                }
                                ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Reg. Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Establishing connection
                                        $server = "wecare.mysql.database.azure.com";
                                        $user = "azure";
                                        $password = "Pranay@302002";
                                        $database = "contact_data";
                                        $ssl_mode = MYSQLI_CLIENT_SSL;

                                        $conn = mysqli_init();
                                        mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
                                        mysqli_real_connect($conn, $server, $user, $password, $database, 3306, NULL, $ssl_mode);

                                        // Querying the database
                                        $ret = mysqli_query($conn, "SELECT * FROM contact_info");

                                        if (!$ret) {
                                            die("Query Error: " . mysqli_error($conn));
                                        }

                                        while ($row = mysqli_fetch_array($ret)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['user'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['subject'];?></td> 
                                            <td><?php echo $row['comment'];?></td>
                                            <td><?php echo $row['posting_date'];?></td>
                                            <td>
                                                <form action="code.php" method="POST">   
                                                    <input type="hidden" name="dltsug_id" value="<?php echo $row['id'];?>">
                                                    <button type="submit" class="btn" name="dltsug_btn"><i class="fa fa-trash"></i></button>
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