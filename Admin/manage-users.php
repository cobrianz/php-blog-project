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
                <li><a href="./manage-users.php" class="active"><img src="./images/users.png" alt="">
                        <h5>Manage User</h5>
                    </a></li>
                <li><a href="./add-category.php"><img src="./images/category.png" alt="">
                        <h5>Add Categories</h5>
                    </a></li>
                <li><a href="./manage-categories.php" ><img src="./images/bookmarks.png" alt="">
                        <h5>Manage Categories</h5>
                    </a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage users</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Brian Cheruiyot</td>
                        <td>Brian445</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Cyrus Kipsang</td>
                        <td>Cyrus</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                        <td>Yes</td>
                    </tr>
                    <tr>
                        <td>Moreen Moraa</td>
                        <td>Moraa</td>
                        <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                        <td><a href="delete-user.php" class="btn sm danger">Delete</a></td>
                        <td> No</td>
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