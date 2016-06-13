<?php
/**
 * Created by PhpStorm.
 * User: Saline
 * Date: 6/9/2016
 * Time: 8:01 PM
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
    }
    function index()
    {
        $this->load->view('home');
    }
}