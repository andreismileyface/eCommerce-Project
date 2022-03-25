<?php 

class Cruise extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Cruise/index');
    }
}