<?php

class Cart extends Controller {
    public function __construct()
    {
        $this->tripModel = $this->model('tripModel');
        $this->userModel = $this->model('userModel');
        $this->cartModel = $this->model('cartModel');
    }

    public function index() {
        $carts = $this->cartModel->getAllCarts();
        $cart_details = [];


        foreach($carts as $cart){
            $trip = $this->tripModel->getTrip($cart->trip_id);
            array_push($cart_details,$trip);
        }


        $data = [
            'carts' => $carts,
            'trips' => $cart_details
        ];

        $this->view('Cart/index',$data);
   
    }

    public function removeTrip($id){
        
        $data = [
            'number' => $_POST['price'],
            'id' => $id
        ];
        if ($this->cartModel->remove($data)) {
        echo 'Trip successfully added';
        echo '<meta http-equiv="Refresh" content="0.1; url=/eCommerce-Project/Cart">';
        }
    }

    public function deleteCart($user_id){
        if (isset($_POST['Delete'])){
        $user_id = $_SESSION['user_id'];
        $data = [
            'user_id' => $user_id,
        ];
        $this->cartModel->deleteAllCart($user_id);
        echo 'Cart successfully deleted';
        echo '<meta http-equiv="Refresh" content="2; url=/eCommerce-Project/Cart">';
        }
    }

    /*public function purchaseSingle($cart_id){
        echo 'Thank you for the purchase';
        echo '<meta http-equiv="Refresh" content="2; url=/eCommerce-Project/Cart">';
    }*/

    public function deleteSingle($id){
        $cart = $this->cartModel->getCart($id);

        if ($this->cartModel->deleteSingleCart($id)) {
            $number = $this->cartModel->selectNumber($id);
            $new = $this->tripModel->getTrip($id);
            $data = [
                'number' => $number,
                'id' => $new
            ];
            $this->cartModel->remove($data);
            echo 'Cart item successfully deleted';
            echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/Cart">';
        }
    }

    public function addSingle($id){
        //$cart = $this->cartModel->getCart($id);

        $data = [
            'number' => $_POST['number'],
            'id' => $id
        ];

        if ($this->cartModel->addPurchase($data)){
            echo 'Successful purchase';
            echo '<meta http-equiv="Refresh" content="1; url=/eCommerce-Project/User">';
        }
    }
    }


   
