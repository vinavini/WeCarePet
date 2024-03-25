<?php
    $server = "wecare.mysql.database.azure.com";
    $user = "azure";
    $password = "Pranay@302002";
    $database = "contact_data";
    $ssl_mode = MYSQLI_CLIENT_SSL;
    
    $conn = mysqli_init();
    mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
    mysqli_real_connect($conn, $server, $user, $password, $database, 3306, NULL, $ssl_mode);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // $conn = mysqli_connect('localhost','root');

    // if($conn){
    //     echo "Connection Successful";
    // }else{
    //     echo "No Connection";
    // }

    // mysqli_select_db($conn,'contact_data');

    $user = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];

    $query = "INSERT INTO contact_info (user, email, subject, comment)
    VALUES ('$user','$email','$subject','$comment')";

    mysqli_query($conn, $query);

    header('location:index.php');
?>