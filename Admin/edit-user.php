<?php
include 'partials/header.php';
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Posts</h2>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Firt Name">
            <input type="text" placeholder="Last Name">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit" class="btn">Update User</button>
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>