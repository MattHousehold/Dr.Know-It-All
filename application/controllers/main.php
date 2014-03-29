<?php
  class Blog extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('model');
    }

    function index()
    {
      $data['title'] = "Dr. Know-It-All";
      $data['quotes'] = $this->quote_model->getquotes();
      $this->load->view('templates/header', $data2);
      $this->load->view('landing_view', $data2);
      $this->load->view('templates/footer');
    }
  }