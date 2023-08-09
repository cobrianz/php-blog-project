<?php
require 'config/database.php';

if (isset($_GET['id'])) {
    
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    //fetch user data from database
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);

    //ensure that the user fetched is only one
    if(mysqli_num_rows($result) == 1) {
        $avatar_name = $user['avatar'];
        $avatar_path = '../assets/'.$avatar_name;

        //delete the user avatar if available

        if($avatar_path){
            unlink($avatar_path);
        }
    }

    //FOR LATER
    #FETCH USER THUMBNAILS AND POSTS TO DELETE THEM


    //delete user from database

    $delete_user_query = "DELETE FROM users WHERE id = $id";
    $delete_user_result = mysqli_query($connection, $delete_user_query);
    if(mysqli_errno($connection)) {
        $_SESSION['delete-user'] = "Unable to delete user {$user['firstname']} {$user['lastname']}";
    } else {
        $_SESSION['delete-user-success'] = "user {$user['firstname']} {$user['lastname']} deleted successfully"; 
        
    }
    
}
header("Location: ". ROOT_URL .'Admin/manage-users.php');
die();
?>