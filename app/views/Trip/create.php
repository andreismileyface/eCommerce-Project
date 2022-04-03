<?php include APPROOT . '/views/includes/header.php'; ?>
<div class="container">


  <h1>Create post</h1>

  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="name">Type</label>
      <select id="name" name="name">
        <option value="1">Flight</option>
        <option value="0">Cruise</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <br>
      <textarea name="description" id="description" cols="100" rows="10" style="width: 100%;"></textarea>
    </div>

    <label for="price">Price</label>
    <div class="input-group mb-3" id="price">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" require>
      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>
    </div>
    <label for="max">Maximum passengers</label>
    <div class="input-group mb-3" id="max">
      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="max" value="100" require>
    </div>
    <div class="form-group">
      <label for="date">Start date</label>
      <input type="date" class="form-control" id="date" name="date" min="<?php echo date("Y-m-d") ?>">
    </div>
    <div class="form-group">
      <label for="from">From</label>
      <select class="form-select" aria-label="From select" id="from" name="start">
        <option value="Montreal" selected>Montreal</option>
        <option value="Toronto">Toronto</option>
        <option value="Quebec City">Quebec City</option>
        <option value="New York">New York</option>
        <option value="Florida">Florida</option>
      </select>
    </div>
    <div class="form-group">
      <label for="destination">Destination</label>
      <select class="form-select" aria-label="From select" id="destination" name="destination">
        <option value="Montreal">Montreal</option>
        <option value="Toronto" selected>Toronto</option>
        <option value="Quebec City">Quebec City</option>
        <option value="New York">New York</option>
        <option value="Florida">Florida</option>
      </select>
    </div>
    <button type="submit" name="create" class="btn btn-primary">Create</button>
  </form>
</div>
<?php include APPROOT . '/views/includes/footer.php'; ?>