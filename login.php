<style>
    .form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .form input {
        width: 400px;
    }
</style>


<form action="includes/form-handler/login.php" method="post" role="form" class="form">
    <h3>Login</h3>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="pwd" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" name="login_submit" value="Login" class="btn btn-primary">
    </div>
</form>