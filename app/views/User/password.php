<?php include APPROOT.'/views/includes/header.php'; ?>
<h2> Password Change</h2>

<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
        <label for="email">New Password</label>
        <input type="password" class="form-control" id="password" name="password"> 
    </div>
    <div class="form-group">
        <label for="password">Confirm New Password</label>
        <input type="password" class="form-control" id="verify_password" name="verify_password" >
    </div>
    <div class='mt-2'> 
        <button type="submit" name="submit" class="btn btn-primary">Change</button>
    </div>
</form>

<?php require APPROOT.'/views/includes/footer.php'; ?>