<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_payment.css">
    <title>Payment Form</title>
</head>

<body>
    <div class="container">
        <h1 class="main_heading">Payment Form</h1>
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
        <form action="admin_panel/loginsystem/admin/code.php" method="post">
            <p>Required fields are followed by *</p>
            <h2>Contact Information</h2>
            <input type="hidden" name="id" id="id">
            <p>Name: *<input type="text" name="name" required></p>
            Gender*
            <fieldset>   
            <p>
                <input type="radio" name="gender" id="male" value="m" required> Male
                <input type="radio" name="gender" id="female" value="f" required> Female
                <input type="radio" name="gender" id="other" value="o" required> Other
            </p>
            </fieldset>
            <p>Address: <textarea name="address" id="" cols="30" rows="5" placeholder="Enter your Address"></textarea></p>
            <p>Email: *<input type="email" name="email" id="email" required>
            </p>
            <p>Pincode: *<input type="number" name="pincode" id="pincode" required></p>
            <hr>
            <h2>Payment Information</h2>
            <p>Pricing Plan: *
                <select name="plan" id="plan" required>
                    <option value="">--Select Plan--</option>
                    <option value="Basic">Basic</option>
                    <option value="Standard">Standard</option>
                    <option value="Premium">Premium</option>
                </select>
            </p>
            <p>Card Type: *
                <select name="card_type" id="card_type" required>
                    <option value="">--Select Card type--</option>
                    <option value="Visa">Visa</option>
                    <option value="rupay">Rupay</option>
                    <option value="mastercard">MsterCard</option>
                </select>
            </p>
            <p>
            Card Number: *<input type="number" name="card_number" id="card_number" required> 
            </p>
            <p>
                Exipration Date: *<input type="date" name="exp_date" id="exp_date" required>
            </p>
            <p>CVV: *<input type="password" name="cvv" id="cvv" required></p>
            <button type="submit" name="btn">Submit</button>

        </form>
    </div>
</body>
</html>