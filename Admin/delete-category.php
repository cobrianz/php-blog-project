<?php

require 'config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    //FOR LATER
    //update category id of the posts that belong to this  category to id of uncategorized categories


    //delete category

    $query = "DELETE FROM categories WHERE id = $id LIMIT 1";
    $result = mysqli_query($connection, $query);
    $_SESSION['delete-category-success'] = "Category deleted successfully";
}

header("Location: ". ROOT_URL . 'Admin/manage-categories.php');
die();
?>