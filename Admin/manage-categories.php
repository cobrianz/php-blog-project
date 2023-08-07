<?php
include 'partials/header.php';
?>


<section class="dashboard">
    <div class="container dashboard__container">
        <button id="hide__sidebar-btn" class="sidebar__toggle"><img src="../images/chevron-right.png" style="width: 2rem; filter: invert()"></button>
        <button id="show__sidebar-btn" class="sidebar__toggle"><img src="../images/chevron-left.png"  style="width: 2rem; filter: invert()"></button>
        <aside>
            <ul>
                <li><a href="./add-post.php"><img src="./images/article.png" alt="">
                        <h5>Add Post</h5>
                    </a></li>
                <li><a href="./index.php"><img src="./images/baseline-density-medium.png" alt="">
                        <h5>Manage Post</h5>
                    </a></li>
                <li><a href="./manage-users.php"><img src="./images/users.png" alt="">
                        <h5>Manage User</h5>
                    </a></li>
                <li><a href="./add-category.php"><img src="./images/category.png" alt="">
                        <h5>Add Categories</h5>
                    </a></li>
                <li><a href="./manage-categories.php" class="active"><img src="./images/bookmarks.png" alt="">
                        <h5>Manage Categories</h5>
                    </a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Category</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Travel</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Wild Life</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                    <tr>
                        <td>Music</td>
                        <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</section>


    <!-- footer -->
    <?php
include '../partials/footer.php';
?>