<?php
  class admin extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('quote_model');
    }

    function index()
    {
      $this->load->helper('form');
      $data['title'] = "Dr.Know-It-All | Admin";
      $data['quote'] = $this->quote_model->getquotes();
      $this->load->view('templates/header', $data);
      $this->load->view('admin_view', $data);
      $this->load->view('templates/footer');
    }

    function create()
    {
      $this->load->helper('form');
      $data['title'] = "| Admin";
      $this->quote_model->create_quote();
      $this->load->view('templates/header');
      $this->load->view('submitted_view');
      $this->load->view('templates/footer');
    }

  }