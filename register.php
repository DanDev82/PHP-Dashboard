<?php include 'login-header.php'; ?>
  <div class="register-wrapper">
    <div class="row">
      <div class="col col-sm-12">
      <form method="GET" class="form">
        <h4>New User</h4>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-icon"><i class="fas fa-address-book"></i></span>
            </div>
            <input type="text" name="first_name" class="form-control input-border" placeholder="First Name" aria-label="First Name" aria-describedby="first name" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-icon"><i class="fas fa-address-book" style="transform: scaleX(-1)"></i></span>
            </div>
            <input type="text" name="last_name" class="form-control input-border" placeholder="Last Name" aria-label="Last Name" aria-describedby="last name" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-icon"><i class="fas fa-user-alt"></i></span>
            </div>
            <input type="text" name="username" class="form-control input-border" placeholder="Username" aria-label="Username" aria-describedby="username" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-icon"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control input-border" placeholder="Email" aria-label="Email" aria-describedby="email" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-icon"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="password" class="form-control input-border" placeholder="Password" aria-label="Username" aria-describedby="pass-icon" autocomplete="new-password">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text input-icon"><i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="confirm_pass" class="form-control input-border" placeholder="Confirm Password" aria-label="Username" aria-describedby="pass-icon" autocomplete="new-password">
          </div>
        </div>
        <input type="submit" class="btn btn-block form-action-button" value="Register">
      </form>
      </div>
    </div>
  </div>
<?php include 'login-footer.php'; ?>