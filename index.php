<?php include 'login-header.php' ?>
  <div class="login-wrapper">
    <div class="row">
      <div class="col col-sm-12">
      <form method="GET" class="form">
        <h4>User Login</h4>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
            </div>
            <input type="text" name="user_name" class="form-control input-border" placeholder="Username" aria-label="Username" aria-describedby="user-icon">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="user_pass" class="form-control input-border" placeholder="Password" aria-label="Username" aria-describedby="pass-icon">
          </div>
        </div>
        <button type="submit" class="btn btn-block form-action-button">Login</button>
        <div class="text-muted text-center"><small><a href="">Forgot Username/Password</a></small></div>
        <a href="register.php" id="register-link" class="text-muted">Create your Account &nbsp;<i class="fas fa-long-arrow-alt-right text-muted"></i></a>
      </form>
      </div>
    </div>
  </div>
<?php include 'login-footer.php' ?>
