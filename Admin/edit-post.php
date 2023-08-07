<?php
include 'partials/header.php';
?>

<section class="form__section">
    <div class="container form__section-container">
        <h2>Edit Posts</h2>
        <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title">
            <select name="" id="">
                <option value="1">Travel</option>
                <option value="1">Art</option>
                <option value="1">Science & Technology</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
                <option value="1">Travel</option>
            </select>
            <textarea name="" id="" rows="10" placeholder="Description"></textarea>
            <div class="form__control inline">
                <input type="checkbox" name="" id="" checked>
                <label for="is__featured" >Featured</label>
            </div>
            <div class="form__control">
                <label for="thumbnail">Update Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update Posts</button>
        </form>
    </div>
</section>
<?php
include '../partials/footer.php';
?>