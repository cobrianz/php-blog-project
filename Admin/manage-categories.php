<?php
include 'partials/header.php';

//fetch categories from database

$query = 'SELECT * FROM categories ORDER BY title';
$categories = mysqli_query($connection, $query);
?>


<section class="dashboard">
        <?php if(isset($_SESSION['add-category-success'])) : //show if categpry was added successful ?>

        <div class="alert__message success container">
        <p><?= $_SESSION['add-category-success'];
        unset($_SESSION['add-category-success']);
        ?></p>
    </div>
        <?php elseif(isset($_SESSION['add-category'])) : //show if categpry was Not added successful ?>

        <div class="alert__message error container">
        <p><?= $_SESSION['add-category'];
        unset($_SESSION['add-category']);
        ?></p>
    </div>
        <?php elseif(isset($_SESSION['edit-category-success'])) : //show if categpry was successful updated ?>

        <div class="alert__message success container">
        <p><?= $_SESSION['edit-category-success'];
        unset($_SESSION['edit-category-success']);
        ?></p>
    </div>
        <?php elseif(isset($_SESSION['edit-category'])) : //show if categpry was successful updated ?>

        <div class="alert__message error container">
        <p><?= $_SESSION['edit-category'];
        unset($_SESSION['edit-category']);
        ?></p>
    </div>
        <?php elseif(isset($_SESSION['delete-category-success'])) : //show if categpry was successful deleted ?>

        <div class="alert__message success container">
        <p><?= $_SESSION['delete-category-success'];
        unset($_SESSION['delete-category-success']);
        ?></p>
    </div>
        <?php elseif(isset($_SESSION['delete-category'])) : //show if categpry was not successful deleted ?>

        <div class="alert__message success container">
        <p><?= $_SESSION['delete-category'];
        unset($_SESSION['delete-category']);
        ?></p>
    </div>
    <?php endif; ?>
    <div class="container dashboard__container">
        <button id="hide__sidebar-btn" class="sidebar__toggle"><img src="../images/chevron-right.png" style="width: 2rem; filter: invert()"></button>
        <button id="show__sidebar-btn" class="sidebar__toggle"><img src="../images/chevron-left.png"  style="width: 2rem; filter: invert()"></button>
        <aside>
            <ul>
                <li><a href="./add-post.php"><img src="../images/article.png" alt="">
                        <h5>Add Post</h5>
                    </a></li>
                <li><a href="./index.php"><img src="../images/baseline-density-medium.png" alt="">
                        <h5>Manage Post</h5>
                    </a></li>
                    <?php if (isset($_SESSION['user_is_admin'])) : ?>
                <li><a href="./manage-users.php"><img src="../images/users.png" alt="">
                        <h5>Manage User</h5>
                    </a></li>
                    
                        <li><a href="./add-user.php"><img src="../images/article.png" alt="">
                        <h5>Add user</h5>
                    </a></li>
                <li><a href="./add-category.php"><img src="../images/category.png" alt="">
                        <h5>Add Categories</h5>
                    </a></li>
                <li><a href="./manage-categories.php" class="active"><img src="../images/bookmarks.png" alt="">
                        <h5>Manage Categories</h5>
                    </a></li>
                    <?php endif ?>
            </ul>
        
        </aside>
        <main>
            <h2>Manage Category</h2>
            <?php if(mysqli_num_rows($categories) > 0) : ?>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($category = mysqli_fetch_assoc($categories)) : ?>
                    <tr>
                        <td><?= $category['title']?></td>
                        <td><a href="<?= ROOT_URL ?>Admin/edit-category.php?id=<?= $category['id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>Admin/delete-category.php?id=<?= $category['id'] ?>" class="btn sm danger">Delete</a></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php else : ?>
                <div class="alert__message error">
                    <?= "No categories found" ?>
                </div>
                <?php endif; ?>
        </main>
    </div>
</section>


    <!-- footer -->
    <?php
include '../partials/footer.php';
?>