<?php

class Flight extends Controller {
    public function __construct()
    {
        
    }

    public function index() {
        return $this->view('Flight/index');
    }
}