<?php
//header
include './templates/header.php';
?>
<main>
    <h2>You are not logged in. Please use the login below to access your account.</h2>
    <section class="login-form">
        <h3>Log In</h3>
        <form method="post" action="./templates/validation.php">
            <fieldset class="login-fieldset">
                <legend>Login</legend>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>
                <label for="password">Password</label>
                <input type="text" id="password" name="password" placeholder="Password" required>
            </fieldset>
            <button type="submit">Login</button>
        </form>
    </section>
</main>
<?php
include './templates/footer.php';
?>
