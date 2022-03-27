
<?php include APPROOT.'/views/includes/header.php'; ?>
<link rel="stylesheet" href="public/css/SignIn.css">

<h1>Sign in</h1>
<form method="POST" action="">
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<div>Don't have an account? <a href="/eCommerce-Project/Author/signup">Create an account</a></div>

<?php
  if (isset($data['msg'])) {
    echo '<div class="alert alert-danger">'.$data['msg'].'</div>';
  }
?>
<?php include APPROOT.'/views/includes/footer.php'; ?>