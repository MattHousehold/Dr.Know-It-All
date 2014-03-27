<?php
  class Blog extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('blog_model');
    }

    function index()
    {
      $data['title'] = "Explanations of Animals";
      $data['posts'] = $this->blog_model->getPosts();
      $this->load->view('templates/header', $data);
      $this->load->view('blog_view', $data);
      $this->load->view('templates/footer');
    }

    function post($id)
    {
      $data['title'] = "Explanations of Animals";
      $data['posts'] = $this->blog_model->getPost($id);
      $this->load->view('templates/header', $data);
      $this->load->view('blog_view', $data);
      $this->load->view('templates/footer');
    }

    function getquote()
    {
      $data['quote'] = $this->blog_model->get_quote()
      this->loadview('quote_view', $data)
    }
  }