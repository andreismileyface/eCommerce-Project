<?php include APPROOT.'/views/includes/header.php'; ?>

<h1>Create post</h1>

<form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="name">Title</label>
      <select id="name" name="name" >
            <option value = "1">Flight</option>
            <option value = "0">Cruise</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <br>
      <textarea name="description" id="description" cols="100" rows="10" style="width: 100%;"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <select id="price" name="price" >
      <option value = 0></option>
            <option value = 1>25</option>
            <option value = 2>50</option>
            <option value = 3>75</option>
            <option value = 4>100</option>
      </select>
    </div>
    <div class="form-group">
      <label for="max">Limit</label>
      <select id="max" name="max" >
      <option value = 0></option>
            <option value = 1>25</option>
            <option value = 2>50</option>
            <option value = 3>75</option>
            <option value = 4>100</option>
      </select>
    </div>
    <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" placeholder="date">
  </div>
    <div class="form-group">
      <label for="start">From</label>
      <br>
      <textarea name="start" id="start" cols="50" rows="1" style="width: 50%;"></textarea>
    </div>
    <div class="form-group">
      <label for="destination">To</label>
      <br>
      <textarea name="destination" id="destination" cols="50" rows="1" style="width: 50%;"></textarea>
    </div>
    <button type="submit" name="create" class="btn btn-primary">Create</button>
  </form>
<?php include APPROOT.'/views/includes/footer.php'; ?>
