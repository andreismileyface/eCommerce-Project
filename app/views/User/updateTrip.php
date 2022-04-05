<?php require APPROOT . '/views/includes/header.php'; 
?>

<h1>Update Trip Information</h1> 
    <form class="px-4 py-3" method="post" action="">

    

    <div class="form-group">
        <label for="nameinput">Name</label>
        <input name="name" type="text" class="form-control" id="nameinput" value="<?php echo $data->name?>">
    </div>
   
    <div class="form-group">
        <label for="dateinput">Date</label>
        <input name="date" type="date" class="form-control" id="date" value="<?php echo $data->date?>">
    </div>

    <label for="price">Price</label>
    <div class="input-group mb-3" id="price">
      <div class="input-group-prepend">
        <span class="input-group-text">$</span>
      </div>
      <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" value="<?php echo $data->price?>" require>
      <div class="input-group-append">
        <span class="input-group-text">.00</span>
      </div>
    </div>

    <div class="form-group">
        <label for="maxinput">Max</label>
        <input name="max" type="number" class="form-control" id="max" value="<?php echo $data->max?>">
    </div>
   
    <div class="form-group">
        <label for="descriptioninput">Description</label>
        <input name="description" type="text" class="form-control" id="description" value="<?php echo $data->description?>">
    </div>

    <div class="form-group">
      <label for="from">From</label>
      <select class="form-select" aria-label="From select" id="from" name="start"value="<?php echo $data->start?>">
        <option value="Montreal" selected>Montreal</option>
        <option value="Toronto">Toronto</option>
        <option value="Quebec City">Quebec City</option>
        <option value="New York">New York</option>
        <option value="Florida">Florida</option>
      </select>
    </div>

    <div class="form-group">
      <label for="destination">Destination</label>
      <select class="form-select" aria-label="From select" id="destination" name="destination" value="<?php echo $data->destination?>">
        <option value="Montreal">Montreal</option>
        <option value="Toronto" selected>Toronto</option>
        <option value="Quebec City">Quebec City</option>
        <option value="New York">New York</option>
        <option value="Florida">Florida</option>
      </select>
    </div>
    
    
    

    <button type="submit" name='update' class="btn btn-primary">Update</button>
    </form>











<?php require APPROOT . '/views/includes/footer.php'; ?>