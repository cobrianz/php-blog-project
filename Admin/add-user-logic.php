<?php
session_start();
require 'config/database.php';


//get data from database on clicking submit button

if(isset($_POST['submit'])){

$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
$username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);   
$createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);   
$confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$is_admin = filter_var($_POST['userrole'], FILTER_SANITIZE_NUMBER_INT);
$avatar = $_FILES['avatar'];

//validate inputs

if(!$firstname){
    $_SESSION['add-user'] = "Please enter your first name";
} elseif(!$lastname){
$_SESSION['add-user'] = "Please enter your last name";
} elseif(!$username){
    $_SESSION['add-user'] = "Please enter your  username";
    } elseif(!$email){
        $_SESSION['add-user'] = "Please enter your email";
    } elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
            $_SESSION['add-user'] = "Password should be 8+ characters";
            } elseif(!$avatar['name']){
                $_SESSION['add-user'] = "Please add an avatar"; 
                } else{ 
                    //check password equality

                    if($createpassword != $confirmpassword){
                        $_SESSION['add-user'] = 'password do not match';
                    } else {
                        $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

                        //check if the username arealdy exists

                        $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
                        $user_check_result = mysqli_query($connection, $user_check_query);

                        if (mysqli_num_rows($user_check_result) > 0) {
                            $_SESSION['add-user'] = "Username or Email already exist";
                        } else {
                            //AVATAR
                            //remane avatar

                           $time = time(); //unique time stamp for each image

                           $avatar_name = $time . $avatar['name'];
                           $avatar_tmp_name = $avatar['tmp_name'];
                           $avatar_destination_path = '../assets/' . $avatar_name;

                           //make sure the avatar is an image

                           $allowed_files = ['png', 'jpg', 'jpeg'];
                           $extention = explode('.', $avatar_name);
                           $extention = end($extention);

                           if(in_array($extention, $allowed_files)){
                            //make sure the avatar is not too large

                            if($avatar['size'] < 2000000){

                                //upload image

                                move_uploaded_file($avatar_tmp_name, $avatar_destination_path);

                               }else{
                                    $_SESSION['add-user'] = 'File is too large. Should be less than 2mb';
                                 }
                            } else {
                                $_SESSION['add-user'] = 'File should be png, jpg,or jpeg.';
                            }
                           }
                    }
                }

               //if there is an error redirects back to login

               if(isset($_SESSION['add-user'])){
                //pass data to add-user page
                $_SESSION['add-user-data'] = $_POST;
                header('location: ' . ROOT_URL .'Admin/add-user.php');
                die();
               } else {
                //insert  data into database
                 $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar,
                 is_admin) VALUES ('$firstname','$lastname','$username','$email','$hashed_password','$avatar_name','$is_admin')";

                $insert_user_result = mysqli_query($connection, $insert_user_query);

                 if(!mysqli_errno($connection)){
                    //redirect to login page with success message

                    $_SESSION['add-user-success'] = "User $firstname $lastname added Successfully.";
                    header('location: ' . ROOT_URL .'Admin/manage-users.php');
                    die();
                 }
               }
               
             } else{

//if button was not clicked then back to add-user

header('Location: '. ROOT_URL . 'Admin/add-user.php');
die();

}