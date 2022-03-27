<?php require APPROOT.'/views/includes/header.php'; ?>
<h1>Signup</h1>
<form method="POST" action="">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password">Password Confirmation</label>
    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<div>Already have an account? <a href="/eCommerce-Project/Author/signin">Login</a></div>

<?php
  if (isset($data['msg'])) {
    echo '<div class="alert alert-danger">'.$data['msg'].'</div>';
  }
?>

<?php require APPROOT.'/views/includes/footer.php'; ?>
