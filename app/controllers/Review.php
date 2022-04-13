<?php

class Review extends Controller {
    public function __construct()
    {
        $this->reviewModel = $this->model('reviewModel');
    }

    public function edit($id) {
        // make sure the review exists and that the correct user is accessing it
        $review = $this->reviewModel->getReviewById($id);
        if (!isLoggedIn() || !isset($review->review_id) || $_SESSION['user_id'] != $review->user_id) {
            echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/">';
        } else {
            if (!isset($_POST['submit'])) {
                return $this->view('Review/edit', [
                    'review' => $review
                ]);
            } else {
                $data = [
                    'review_id' => $id,
                    'newValue' => $_POST['newValue'],
                    'newMessage' => $_POST['newMessage']
                ];
                if ($this->reviewModel->editReview($data)) {
                    echo 'Editing your review...';
                    echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Trip/viewTrip/'.$review->trip_id.'">';
                }
            }
        }
    }

    public function delete($id) {
        // make sure the review exists and that the correct user is accessing it
        $review = $this->reviewModel->getReviewById($id);
        if (!isLoggedIn() || !isset($review->review_id) || $_SESSION['user_id'] != $review->user_id) {
            echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/">';
        } else {
            if ($this->reviewModel->deleteReview($id)) {
                echo 'deleting review...';
                echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Trip/viewTrip/'.$review->trip_id.'">';
            }
        }
    }
}