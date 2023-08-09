<?php
include 'partials/header.php';

//fetch user from database

$current_admin_id = $_SESSION['user-id'];

$query = "SELECT * FROM users WHERE NOT id = $current_admin_id";
$users = mysqli_query($connection, $query); 


?>

<section class="dashboard">
<?php if(isset($_SESSION['add-user-success'])) : //show if user is added successful ?>

<div class="alert__message success container">
<p><?= $_SESSION['add-user-success'];
unset($_SESSION['add-user-success']);
?></p>
</div>
<?php elseif(isset($_SESSION['edit-user-success'])) : //show if  user is updated successful ?>

<div class="alert__message success container">
<p><?= $_SESSION['edit-user-success'];
   unset($_SESSION['edit-user-success']); 
   ?></p>
</div>
<?php elseif(isset($_SESSION['edit-user'])) : //show if  user is not updated successful ?>

<div class="alert__message error container">
<p><?= $_SESSION['edit-user'];
   unset($_SESSION['edit-user']); 
   ?></p>
</div>
<?php elseif(isset($_SESSION['delete-user'])) : //show if  user is not updated successful ?>

<div class="alert__message error container">
<p><?= $_SESSION['delete-user'];
   unset($_SESSION['delete-user']); 
   ?></p>
</div>
<?php elseif(isset($_SESSION['delete-user-success'])) : //show if  user is not updated successful ?>

<div class="alert__message success container">
<p><?= $_SESSION['delete-user-success'];
   unset($_SESSION['delete-user-success']); 
   ?></p>
</div>

<?php endif ?>
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

                <li><a href="./manage-users.php" class="active"><img src="../images/users.png" alt="">
                        <h5>Manage User</h5>
                    </a></li>
                    <li><a href="./add-user.php"><img src="../images/article.png" alt="">
                        <h5>Add user</h5>
                    </a></li>
                <li><a href="./add-category.php"><img src="../images/category.png" alt="">
                        <h5>Add Categories</h5>
                    </a></li>
                <li><a href="./manage-categories.php" ><img src="../images/bookmarks.png" alt="">
                        <h5>Manage Categories</h5>
                    </a></li>
                    <?php endif ?>
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
                    <?php while($user = mysqli_fetch_assoc($users)) : ?>
                    <tr>
                        <td><?= "{$user['firstname']} {$user['lastname']}" ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><a href="<?= ROOT_URL ?>Admin/edit-user.php?id=<?= $user['id'] ?>" class="btn sm">Edit</a></td>
                        <td><a href="<?= ROOT_URL ?>Admin/delete-user.php?id=<?= $user['id']?>" class="btn sm danger">Delete</a></td>
                        <td><?= $user['is_admin'] ? 'Yes' : 'NO'?></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </main>
    </div>
</section>


    <!-- footer -->
    <?php
include '../partials/footer.php';
?>