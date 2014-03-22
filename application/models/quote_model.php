<?php
  class Blog_model extends CI_MODEL {
    function getPosts()
    {
      $query = $this->db->get('data2');
      return $query->result_array();
    }

    function create_post()
    {
      $data['title'] = $this->input->post('title');
      $data['content'] = $this->input->post('content');
      $data['category'] = $this->input->post('category');


      return $this->db->insert('data2', $data);
    }

    function getPost($id)
    {
      $query = $this->db->get_where('data2', array('id' => $id));
      return $query->result_array();
    }

    function update_post($id)
    {
      $data['title'] = $this->input->post('title');
      $data['content'] = $this->input->post('content');
      $data['category'] = $this->input->post('category');
      $this->db->where('id', $id);
      $this->db->update('data2', $data);
    }

    function delete_post($id)
    {
      $this->db->delete('data2', array('id' => $id));
    }
  }