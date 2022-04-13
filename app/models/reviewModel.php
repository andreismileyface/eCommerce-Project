<?php

class reviewModel {
    public function __construct()
    {
        $this->db = new Model;
    }

    public function getReviewById($id) {
        $this->db->query("SELECT * FROM review WHERE review_id = :review_id");
        $this->db->bind(":review_id", $id);

        return $this->db->getSingle();
    }

    public function getTripReviews($trip_id) {
        $this->db->query("SELECT * FROM review LEFT JOIN user ON review.user_id=user.id WHERE trip_id = :trip_id ");
        $this->db->bind(":trip_id", $trip_id);

        return $this->db->getResultSet();
    }

    public function getReviewByUserIdAndTripId($data) {
        $this->db->query("SELECT * FROM review WHERE trip_id = :trip_id AND user_id = :user_id");
        $this->db->bind(":trip_id", $data['trip_id']);
        $this->db->bind(":user_id", $data['user_id']);

        return $this->db->getSingle();
    }

    public function reviewTrip($data) {
        $this->db->query("INSERT INTO review (trip_id, user_id, value, message) VALUES (:trip_id, :user_id, :value, :message)");
        $this->db->bind(":trip_id", $data['trip_id']);
        $this->db->bind(":user_id", $data['user_id']);
        $this->db->bind(":value", $data['value']);
        $this->db->bind(":message", $data['message']);

        return $this->db->execute();
    }

    public function editReview($data) {
        $this->db->query("UPDATE review SET value = :newValue, message = :newMessage WHERE review_id = :review_id");
        $this->db->bind(":newValue", $data['newValue']);
        $this->db->bind(":newMessage", $data['newMessage']);
        $this->db->bind(":review_id", $data['review_id']);

        return $this->db->execute();
    }

    public function deleteReview($id) {
        $this->db->query("DELETE FROM review WHERE review_id = :review_id");
        $this->db->bind(":review_id", $id);

        return $this->db->execute();
    }
}