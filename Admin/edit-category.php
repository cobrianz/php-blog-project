<?php
include 'partials/header.php';

if (isset($_GET['id'])){

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);


    //fetch category data from database

    $query = "SELECT * FROM categories WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) == 1){
        $category = mysqli_fetch_assoc($result);
    }
} else {
    header('locattion: ' . ROOT_URL . 'Admin/manage-categories.php');
    die();
}
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Category</h2>
        <form action="<?= ROOT_URL?>Admin/edit-category-logic.php" method="POST">
            <input type="hidden" name= "id"  value="<?= $category['id'] ?>">
            <input type="text" name= "title" placeholder="Title" value="<?= $category['title'] ?>">
            <textarea name="description" id="" rows="5" placeholder="Description"><?= $category['description'] ?></textarea>
            <button type="submit" name = "submit" class="btn">Update Category</button>
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>