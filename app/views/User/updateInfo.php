<?php include APPROOT.'/views/includes/header.php'; ?>
<div class="container" style="min-height: 60vh;">

  <h1>Update Personnal Information</h1>

  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
    <label for="firstnameinput">First Name</label>
        <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Name" require value="<?php echo $data['users']->first_name ?>">
    </div>
    <div class="form-group">
        <label for="lastnameinput">Last Name</label>
        <input name="last_name" type="text" class="form-control" id="last_name" placeholder="City" require value="<?php echo $data['users']->last_name ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
  </form>
</div>

</div>
<?php include APPROOT.'/views/includes/footer.php'; ?>