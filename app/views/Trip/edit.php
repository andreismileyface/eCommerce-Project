<?php include APPROOT . '/views/includes/header.php'; ?>
<div class="container">


  <h1>Edit post</h1>

  <form class="px-4 py-3" method="post" action="">
    <div class="form-group">
      <label for="name">Type</label>
      <select id="name" name="name">
        <option value="1" <?php if ($data['flight']->name == 1) echo 'selected' ?>>Flight</option>
        <option value="0" <?php if ($data['flight']->name == 0) echo 'selected' ?>>Cruise</option>
      </select>
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <br>
      <textarea name="description" id="description" cols="100" rows="10" style="width: 100%;"><?php echo $data['flight']->description ?></textarea>
    </div>

    <label for="price">Price</label>
    <div class="input-group mb-3" id="price">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" require value="<?php echo $data['flight']->price ?>">
      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>
    </div>
    <label for="max">Maximum passengers</label>
    <div class="input-group mb-3" id="max">
      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="max" require value="<?php echo $data['flight']->max ?>">
    </div>
    <div class="form-group">
      <label for="date">Start date</label>
      <input type="date" class="form-control" id="date" name="date" min="<?php echo date("Y-m-d") ?>" value="<?php echo $data['flight']->date ?>">
    </div>
    <div class="form-group">
      <label for="from">From</label>
      <select class="form-select" aria-label="From select" id="from" name="start">
        <option value="Montreal" <?php if ($data['flight']->start == "Montreal") echo 'selected' ?>>Montreal</option>
        <option value="Toronto" <?php if ($data['flight']->start == "Toronto") echo 'selected' ?>>Toronto</option>
        <option value="Quebec City" <?php if ($data['flight']->start == "Quebec City") echo 'selected' ?>>Quebec City</option>
        <option value="New York" <?php if ($data['flight']->start == "New York") echo 'selected' ?>>New York</option>
        <option value="Florida" <?php if ($data['flight']->start == "Florida") echo 'selected' ?>>Florida</option>
      </select>
    </div>
    <div class="form-group">
      <label for="destination">Destination</label>
      <select class="form-select" aria-label="From select" id="destination" name="destination">
        <option value="Montreal" <?php if ($data['flight']->destination == "Montreal") echo 'selected' ?>>Montreal</option>
        <option value="Toronto" <?php if ($data['flight']->destination == "Toronto") echo 'selected' ?>>Toronto</option>
        <option value="Quebec City" <?php if ($data['flight']->destination == "Quebec City") echo 'selected' ?>>Quebec City</option>
        <option value="New York" <?php if ($data['flight']->destination == "New York") echo 'selected' ?>>New York</option>
        <option value="Florida" <?php if ($data['flight']->destination == "Florida") echo 'selected' ?>>Florida</option>
      </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Save</button>
  </form>
</div>
<?php include APPROOT . '/views/includes/footer.php'; ?>