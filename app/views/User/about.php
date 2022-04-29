<?php require APPROOT.'/views/includes/header.php'; ?>


<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="publication_text">Content</label>
      <br>
      <textarea name="text_about" id=text_about cols="100" rows="10" style="width: 100%;"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Create</button>
  </form>

  <?php require APPROOT.'/views/includes/footer.php'; ?>
