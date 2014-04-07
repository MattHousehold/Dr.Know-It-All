<?php
  class find extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('quote_model');
    }

    function search()
    {
      $this->load->helper('form');
      $data['title'] = "Dr. Know-It-All";
      $data['quote'] = $this->quote_model->getquotes();
      $this->load->view('templates/header', $data);
      $this->load->view('quote_view');
      $this->load->view('templates/footer');
    }
    
    function index()
    {
      $this->load->helper('form');
      $data['title'] = "Dr. Know-It-All";
      $data['quote'] = $this->quote_model->getquotes();
      $this->load->view('templates/header', $data);
      $this->load->view('landing_view', $data);
      $this->load->view('templates/footer');
    }

    function vote($id)
    {
      $this->load->helper('form');
      $this->quote_model->getvote($id);
      $this->load->view('templates/header');
      $this->load->view('quote_view');
      $this->load->view('templates/footer');
    }

  }