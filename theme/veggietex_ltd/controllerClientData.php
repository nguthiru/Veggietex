<?php

if(!isset($_SESSION)){
    session_start();

}
require "veggietexconnection.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if (isset($_POST['signup'])) {

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Please confirm your passwords they do not match!";
        //$errors['password'] = "CONFIRM PASSOWRD NOT MATCHED!";
    }
    $email_check = "SELECT * FROM clienttable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "The Email that you  entered  already exists!";
        //$errors['email'] = "EMAIL THAT YOU HAVE ENTERED  ALREADY EXISTS!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO clienttable (name, email, password, code, status)
                        values('$name', '$email', '$encpass', '$code', '$status')";
        $data_check = mysqli_query($con, $insert_data);
        $last_id = mysqli_insert_id($con);
        if ($data_check) {

            $subject = "Veggietex Ltd Sign Up Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: nguthiruedwin@gmail.com";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We have sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['user_id'] = $last_id;
                $_SESSION['username'] = $name;

                header('location: client-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = mysqli_error($con);
        }
    }
}
//if user click verification code submit button
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM clienttable WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];

        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE clienttable SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if ($update_res) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            header('location: index.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while updating code!";
        }
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click login button
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM clienttable WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        $fetch_id = $fetch['user_id'];
        $name =  $fetch['name'];
        if (password_verify($password, $fetch_pass)) {
            // if
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if ($status == 'verified') {
                $_SESSION['email'] = $email;
                // $_SESSION['password'] = $password;
                $_SESSION['user_id'] = $fetch_id;
                $_SESSION['username'] = $name;
                // If null, it is 
                if (($fetch['clientaccountstatus']) !== "Deactivated") {
                    header('location: index.php');
                } else {
                    header('location: clientaccountnotactive.php');
                    exit();
                }
            } else {
                $info = "It's look like you have not yet verified your email - $email";
                //$info = "IT LOOKS LIKE YOU HAVEN'T STILL VERIFIED YOUR EMAIL - $email";
                $_SESSION['info'] = $info;
                header('location: client-otp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
            //$errors['email'] = "INCORRECT EMAIL OR PASSWORD!";
        }
    } else {
        $errors['email'] = "It looks like you are not yet a member! Click on the bottom link to signup.";
        //$errors['email'] = "IT LOOKS LIKE YOU'RE NOT YET A MEMBER! CLICK ON THE BOTTOM LINK TO SIGN-UP.";
    }
}

//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM clienttable WHERE email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE clienttable SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if ($run_query) {
            $subject = "Veggietex Ltd Client Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From: nguthiruedwin@gmail.com";
            if (mail($email, $subject, $message, $sender)) {
                $info = "We have sent a password reset otp to your email - $email";
                //$info = "WE ' VE SENT A PASSWORD RESET OTP TO YOUR EMAIL - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: clientresetcode.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!";
            }
        } else {
            $errors['db-error'] = "Something went wrong!";
        }
    } else {
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM clienttable WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password for your Account.";
        $_SESSION['info'] = $info;
        header('location: clientnewpassword.php');
        exit();
    } else {
        $errors['otp-error'] = "You have entered the incorrect code!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Please confirm your password they don not match!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE clienttable SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password has changed. You may now login with your new password.";
            //$info = "YOUR PASSWORD CHANGED. NOW YOU CAN LOGIN WITH YOUR NEW PASSWORD.";
            $_SESSION['info'] = $info;
            header('Location: clientpasswordchanged.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: clientlogin.php');
}
