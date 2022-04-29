<?php require APPROOT.'/views/includes/header.php'; ?>


<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="text_about">Content</label>
      <br>
      <textarea class="form-control" id="text_about" cols="100" rows="10" style="width: 100%;" name="text_about"><?php echo $data['user_id']->text_about?></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>

  <?php require APPROOT.'/views/includes/footer.php'; ?>