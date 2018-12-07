<?php include 'login-header.php' ?>

  <div class="login-wrapper">
    <div class="row">
      <div class="col col-sm-12">
      <form action="includes/login.inc.php" method="POST" class="form">
        <h4>User Login</h4>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
            </div>
            <input type="email" name="email" class="form-control input-border" placeholder="Email" aria-label="email" aria-describedby="user-icon" required>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="password" class="form-control input-border" placeholder="Password" aria-label="Password" aria-describedby="pass-icon" required>
          </div>
        </div>
        <button type="submit" name="login" class="btn btn-block form-action-button">Login</button>
        <div class="text-muted text-center"><small><a href="">Forgot Username/Password</a></small></div>
        </form>
        <form name="register-form" id="register-form" action="register.php" method="POST">
          <input type="hidden" name="register" value="true">
          <a href="#" id="register-link" onclick="document.getElementById('register-form').submit();" class="text-muted">Create your Account &nbsp;<i class="fas fa-long-arrow-alt-right text-muted"></i></a>
        </form>
      </div>
    </div>
  </div>
<?php include 'login-footer.php' ?>
