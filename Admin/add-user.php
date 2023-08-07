<?php
include 'partials/header.php';
?>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Firt Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="User Name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Create password">
            <input type="password" placeholder="Confirm Password">
            <select name="" id="">
                <option value="0">Author</option>
                <option value="1">Admin</option>
            </select>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Add User</button>
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>