<?php include APPROOT.'/views/includes/header.php'; ?>
<h2> Email Change</h2>

<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
        <label for="email">New Email</label>
        <input type="email" class="form-control <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="confirm">Confirm New Email</label>
        <input type="text" class="form-control <?php echo (!empty($data['email_match_error'])) ? 'is-invalid' : ''; ?>"  id="verify_email" name="verify_email" >
        <span class="invalid-feedback"><?php echo $data['email_match_error']; ?> </span>
    </div>
    <div class='mt-2'> 
        <button type="submit" name="submit" class="btn btn-primary">Change</button>
    </div>
</form>

<?php require APPROOT.'/views/includes/footer.php'; ?>