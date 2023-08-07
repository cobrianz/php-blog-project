<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section class="form__section">
    <div class="container form__section-container">
        <h2>Sign Up</h2>
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
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <small>Already have an account? <a href="signin.html">Sign In</a></small>
        </form>
    </div>
</section>

</body>
</html>
