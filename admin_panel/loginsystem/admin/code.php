<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","contact_data");

    if(isset($_POST['about_save']))
    {
        $title = $_POST['title'];

        $query = "INSERT INTO aboutus (title) VALUES('$title')";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            // echo "Not Saved";
            $_SESSION['success'] = "Your data is added";
            header('Location: Aboutus.php'); 
        }
        else
        {   
            // echo "Not Saved";
            $_SESSION['status'] = "Your Data is NOT Added";
            // $_SESSION['status_code'] = "error";
            header('Location: Aboutus.php'); 
        }

    }
  
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id'];
        $title = $_POST['edit_title'];

        $query = "UPDATE aboutus SET title='$title' WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            $_SESSION['success'] = "Your data is Updated";
            header('Location: Aboutus.php'); 
        }
        else
        {   
            
            $_SESSION['status'] = "Your Data is NOT Updated";
            // $_SESSION['status_code'] = "error";
            header('Location: Aboutus.php'); 
        }
    }

    if(isset($_POST['delete_btn']))
    {
        $id = $_POST['delete_id'];
        

        $query = "DELETE FROM aboutus WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            $_SESSION['success'] = "Your data is Deleted";
            header('Location: Aboutus.php'); 
        }
        else
        {   
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            // $_SESSION['status_code'] = "error";
            header('Location: Aboutus.php'); 
        }
    }

    if(isset($_POST['dltsug_btn']))
    {
        $id = $_POST['dltsug_id'];
        

        $query = "DELETE FROM contact_info WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            $_SESSION['success'] = "Your data is Deleted";
            header('Location: sugestions.php'); 
        }
        else
        {   
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            // $_SESSION['status_code'] = "error";
            header('Location: sugestions.php'); 
        }
    }

    if(isset($_POST['abtcontact_save']))
    {
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "INSERT INTO shop_info (address,phone,email) VALUES('$address','$phone','$email')";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            // echo "Not Saved";
            $_SESSION['success'] = "Your data is added";
            header('Location: shopcontact.php'); 
        }
        else
        {   
            // echo "Not Saved";
            $_SESSION['status'] = "Your Data is NOT Added";
            // $_SESSION['status_code'] = "error";
            header('Location: shopcontact.php'); 
        }

    }

    if(isset($_POST['updateshopbtn']))
    {
        $id = $_POST['editshop_id'];
        $address = $_POST['editshop_address'];
        $phone = $_POST['editshop_phone'];
        $email = $_POST['editshop_email'];

        $query = "UPDATE shop_info SET address='$address', phone='$phone', email='$email'  WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            $_SESSION['success'] = "Your data is Updated";
            header('Location: shopcontact.php'); 
        }
        else
        {   
            
            $_SESSION['status'] = "Your Data is NOT Updated";
            // $_SESSION['status_code'] = "error";
            header('Location: shopcontact.php'); 
        }
    }

    if(isset($_POST['deleteshop_btn']))
    {
        $id = $_POST['deleteshop_id'];
        

        $query = "DELETE FROM shop_info WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            $_SESSION['success'] = "Your data is Deleted";
            header('Location: shopcontact.php'); 
        }
        else
        {   
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            // $_SESSION['status_code'] = "error";
            header('Location: shopcontact.php'); 
        }
    }

    if(isset($_POST['btn']))
    {
       
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $plan = $_POST['plan'];
        $card_type = $_POST['card_type'];
        $card_number = $_POST['card_number'];
        $exp_date = $_POST['exp_date'];
        $cvv = $_POST['cvv'];

        $query = "insert into user_info (name, gender, address, email, pincode, plan, card_type, card_number, exp_date, cvv)
        values ('$name','$gender','$address','$email','$pincode','$plan','$card_type','$card_number','$exp_date','$cvv')";

        $query_run =mysqli_query($conn, $query);
        header('Location: ../../../index.php');
    }
        
    if(isset($_POST['dltinfo_btn']))

    {    
        $id = $_POST['dltinfo_id'];

        $query = "DELETE FROM user_info WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);

        
        if($query_run)
        {   
            $_SESSION['success'] = "Your data is Deleted";
            header('Location: payment_info.php'); 
        }
        else
        {   
            
            $_SESSION['status'] = "Your Data is NOT Deleted";
            // $_SESSION['status_code'] = "error";
            header('Location: payment_info.php'); 
        }
    }
    

?>