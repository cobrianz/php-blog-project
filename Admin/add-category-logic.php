<?php

require 'config/database.php';

if (isset($_POST['submit'])) {
    //get form submission data

    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$title) {
        $_SESSION['add-category'] = "Enter title";
    } elseif (!$description) {
        $_SESSION['add-category'] = "Enter description";
        
    }
    
    //redirect back to the category page

    if(isset($_SESSION['add-category'])) {
        $_SESSION['add-category'] = $_POST;
        header("Location: " . ROOT_URL . "Admin/add-category.php");
        die();
    } else {
        //insert the category into database

        $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($connection, $query);
        if(mysqli_errno($connection)){
            $_SESSION['add-category'] = "Unable to add category";
            header("Location: " . ROOT_URL . "Admin/add_category.php");
            die();
            
        } else {
            $_SESSION['add-category-success'] = "Category $title added successfully";
            header("Location: " . ROOT_URL . "Admin/manage-categories.php");
            die();

        }
    }

}

?>