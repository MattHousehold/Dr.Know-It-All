<?php
  class Quote_model extends CI_MODEL {
    
    function create_quote()
    {
      $data['content'] = $this->input->post('content');
      $data['author'] = $this->input->post('author');
      $data['age'] = $this->input->post('age');
      $data['feeling'] = $this->input->post('feeling');
      $data['reason'] = $this->input->post('reason');

      return $this->db->insert('sdata', $data);
    }
        function getvote($id)
    {
      /*$data['uservote'] = $this->input->post('uservote');
      $this->db->set(array('uservote' => 'uservote+1'));   
      $this->db->update('sdata', $data);    */
      
      $data['uservote'] = $this->input->post('uservote');
      $this->db->where('id', $id);
      $this->db->set('uservote', 'uservote+1');
      $this->db->set('sdata', array('id' => $id));
    }
    function getquotes()
    {      
      $this->db->order_by('id', 'RANDOM');
      $this->db->limit(1);
      $age = $this->input->post('age');
      $feeling = $this->input->post('feeling');
      $reason = $this->input->post('reason');
      $query = $this->db->get_where
        ('sdata', array('age' => $age, 'feeling' => $feeling, 'reason' => $reason));
      return $query->result_array();
    } 
  }