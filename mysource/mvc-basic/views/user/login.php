<div class="content">
    <h3>Login</h3>
    <?php
    echo $this->errors = (!empty($this->errors)) ?  $this->errors : "";
    ?>
    <form action="index.php?controller=user&action=login" method="post" name="form-login" id="form-login">
        <div class="row">
            <p>Username</p>
            <input type="text" name="username" id="">
        </div>

        <div class="row">
            <p>Password</p>
            <input type="password" name="password" id="">
        </div>

        <div class="row">
            <input type="submit" value="Login" name="submit">
        </div>

    </form>
</div>