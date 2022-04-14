<?php include APPROOT.'/views/includes/header.php'; ?>
<h2> Password Change</h2>

<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control  <?php echo (!empty($data['password_len_error'])) ? 'is-invalid' : ''; ?>" id="password" name="password"> 
        <span class="invalid-feedback"><?php echo $data['password_len_error']; ?> </span>
    </div>
    <div class="form-group">
        <label for="password">Confirm New Password</label>
        <input type="password" class="form-control  <?php echo (!empty($data['password_match_error'])) ? 'is-invalid' : ''; ?>" id="verify_password" name="verify_password"  >
        <span class="invalid-feedback"><?php echo $data['password_match_error']; ?> </span>
    </div>
    <div class='mt-2'> 
        <button type="submit" name="submit" class="btn btn-primary">Change</button>
    </div>
</form>

<?php require APPROOT.'/views/includes/footer.php'; ?>