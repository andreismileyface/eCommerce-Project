<?php include APPROOT . '/views/includes/header.php'; ?>
<link rel="stylesheet" href="public/css/Flights.css">
<div class="row">

    <div class="leftcolumn box">
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
    </div>

    <div class="rightcolumn">
        <div class="box">
        <?php 
            if (!isLoggedIn()) {
                echo '<p>You must be logged in to be able to leave reviews!</p>';
            } else {
                if ($data['alreadyReviewed']) {
                    echo '<p>You already reviewed this trip</p>';
                } else {
                    echo '
                        <h3>Review this flight!</h3>
                        <form action="" method="POST">
                            <label for="range"><b># Stars</b></label>
                            <input type="range" min="1" max="5" name="review" value="1" id="range" oninput="this.nextElementSibling.value = this.value + \'/5\'">
                            <output>1/5</output>
                            <br>
                            <label for="message"><b>Message</b></label>
                            <textarea name="message" id="message" cols="55" rows="5" style="max-width: 90%"></textarea>
                            <button class="btn btn-primary" type="submit" name="submit">Submit!</button>
                        </form>';
                }  
            }
        ?>
        </div>

        <div class="box">

            <h2>Reviews for this Trip</h2>
                <?php
                $reviews = $data['reviews'];
                if (empty($reviews))
                    echo '<p>No reviews for this trip</p>';
                else {
                    foreach ($reviews as $review) {   
                        echo '<div class="review-container">';
                        echo '<a href="/eCommerce-project/User/'.$review->user_id.'">'.$review->first_name.'</a>';
                        for ($i = 0; $i < $review->value; $i++) {
                            echo '<span class="fa fa-star checked"></span>';
                        }
                        // if current user made this review, show edit and delete option
                        if (isLoggedIn() && $_SESSION['user_id'] == $review->user_id) {
                            echo '<a href="/eCommerce-project/Review/delete/'.$review->review_id.'" style="float: right; margin-left: 10px">Delete</a>';
                            echo '<a href="/eCommerce-project/Review/edit/'.$review->review_id.'" style="float: right">Edit</a>';
                        }
                        echo '<p style="font-weight: normal">' . $review->message . '</p>
                              </div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

    <?php include APPROOT . '/views/includes/footer.php'; ?>