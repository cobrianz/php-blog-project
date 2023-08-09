<?php
include 'partials/header.php';

//get data back after unsuccessful update
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Add Category</h2>
        <?php if(isset($_SESSION['add-category'])) :  ?>
            <div class="alert__message error">
            <p><?= $_SESSION['add-category'];
            unset($_SESSION['add-category']);
            ?></p>
        </div>
        <?php endif ?>
        <form action="<?= ROOT_URL ?>Admin/add-category-logic.php" method = "POST">
            <input type="text" name="title" placeholder="Title">
            <textarea name="description" id="" rows="5" placeholder="Description"></textarea>
            <button type="submit" name='submit' class="btn">Add Category</button>
        </form>
    </div>
</section>

<?php
include '../partials/footer.php';
?>