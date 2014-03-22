<?php
  class Blog extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('quote_model');
    }

    function index()
    {
      $data['title'] = "Dr. Know-It-All";
      $data['posts'] = $this->quote_model->getPosts();
      $this->load->view('templates/header', $data2);
      $this->load->view('main_view', $data2);
      $this->load->view('templates/footer');
    }
  }