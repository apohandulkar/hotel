<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	
	function index(){
        $this->load->model("shopping_cart_model");
    }
}