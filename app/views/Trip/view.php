<?php include APPROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" href="public/css/Flights.css">
<div class="container" style="min-height: 60vh">
    <h2>Flight description</h2>
    <a href="#" class="btn btn-primary">Book</a>
    <?php
        if (isLoggedIn()) {
            if ($data['seller']->id == $_SESSION['user_id']) {
                echo '<a href="/eCommerce-Project/Trip/edit/' . $data['trip']->trip_id . '" class="btn btn-success">Edit</a>';
                echo '<a href="/eCommerce-Project/Trip/delete/' . $data['trip']->trip_id . '" class="btn btn-danger">Delete</a>';
            }
        }
    ?>
    <br>
    <b>Seller: </b> <a href="/eCommerce-Project/user/<?php echo $data['seller']->id; ?>"><?php echo $data['seller']->first_name; ?></a>
    <br>
    <b>From: </b> <?php echo $data['trip']->start; ?>
    <br>
    <b>To: </b> <?php echo $data['trip']->destination; ?>
    <br>
    <b>Capacity: </b> <?php echo $data['trip']->max; ?>
    <div><b>Description:</b> <?php echo $data['trip']->description; ?></div>
</div>

<?php include APPROOT . '/views/includes/footer.php'; ?>